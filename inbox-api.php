<?
include "const.php";
include "config.php";
include "functions.php";
header("Content-Type: text/xml; charset=utf-8"); 
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT\n");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

// Datum für den ATOM XML Reponse setzen */
date_default_timezone_set('Europe/Berlin');
$datetime = new DateTime();
$atomdate = $datetime->format(DATE_ATOM);


$name = "";
$output = "";
$title = "Wegwerf E-Mail API";
if (isset ($_GET['name']))
{
	$name = $_GET['name'];
	$email = $name . "@" . $maildomain;
}

if (strlen ($name) > 0)
{
	$output = $xmlstart;
	$output .= "<feed xmlns=\"http://www.w3.org/2005/Atom\">\r\n";
	$output .= "<author> <name>" . $name . "</name> </author>\r\n";
	$output .= "<title>Mails für " . $email . "</title>\r\n";
	$output .= "<id>urn:uuid:c0cfbe9e-bc42-45cf-928f-7521b8b482ee</id>\r\n";
	$output .= "<updated>" . $atomdate . "</updated>\r\n";
		 
	mb_internal_encoding("UTF-8");
	$inbox = imap_open($hostname,$username,$password) 
		or die('Cannot connect to Gmail: ' . imap_last_error());
	$emails = imap_search($inbox,'TO "' . $email . '"');
	if($emails) {
	  rsort($emails);
	  foreach($emails as $email_number) 
	  {
	    $overview = imap_fetch_overview($inbox,$email_number,0);
	    $summary = "";
	    foreach (object2array ($overview[0]) as $oname => $ovalue)
	    {
		$summary .= $oname . " => " . $ovalue . "\r\n";
	    }
	    $maildate = $overview[0]->date; 
	    $mailurl = '.php?search=' . $name . '&amp;nr=' . $email_number;
	    $output .= "<entry>\r\n";
	    $output .= "<title>" . mb_decode_mimeheader(str_replace('_', ' ', $overview[0]->subject)) . "</title>\r\n";
	    $output .= "<link href=\"http://" . $maildomain . "/details" . $mailurl . "\"/>\r\n";
	    $output .= "<id>" . $email_number . "</id>\r\n";
	    $output .= "<updated>" . $maildate . "</updated>";
            $output .= "<summary>" . $cdatastart . $summary . $cdataend . "</summary>\r\n";
	    $output .= "<content>" . $cdatastart . $summary . $cdataend . "</content>\r\n";
	    $output .= "</entry>\r\n";
 
	  }
	  
	} else {
	  $output .= "<entry>
		    <title>0 E-Mails im Posteingang</title>
		    <link href=\"http://" . $maildomain . "/inbox-api.php?name=" . $name . "\"/>
		    <id>urn:uuid:e16f48ad-844b-4999-9d8b-a71f859a33a2</id>
		    <updated>" . $atomdate . "</updated>
		    <summary>Keine E-Mails für <b>" . $email . "</b> im Posteingang</summary>
		    <content>Evtl. sind Ihre E-Mails noch nicht im Posteingang angekommen. 
                    Bitte versuchen Sie es in wenigen Minuten noch einmal.</content>
		    </entry>";
	}
	imap_close($inbox);
	$output .= "\r\n</feed>";
} else {

	$output = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
		<feed xmlns=\"http://www.w3.org/2005/Atom\">
		  <author> <name>" . $supportname . "</name> </author>
		  <title>" . $title . "</title>
		  <id>urn:uuid:c0cfbe9e-bc42-45cf-928f-7521b8b482ee</id>
		  <updated>" . $atomdate . "</updated>
		 
		  <entry>
		    <title>Bitte geben Sie einen Namen an</title>
		    <link href=\"http://" . $maildomain . "/api.php\"/>
		    <id>urn:uuid:e16f48ad-844b-4289-9d8b-aaef859d33a2</id>
		    <updated>" . $atomdate . "</updated>
		    <summary>Sie müssen einen Namen angeben, um die Mails auszulesen</summary>
		    <content>Beispiel: http://" . $maildomain . "/inbox-api.php?name=max-mustermann. Max Mustermann ist der 
			Name des Postfachs für die sie die E-Mails abholen möchten.</content>
		  </entry>
		</feed>";
}

echo $output;

?>
