<?
include "config.php";
include "const.php";
include "functions.php";
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT\n");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

// Datum für den ATOM XML Reponse setzen */
date_default_timezone_set('Europe/Berlin');
$datetime = new DateTime();
$atomdate = $datetime->format(DATE_ATOM);


$id = "";
$name = "";
$output = "";
$mail = "";
if (isset ($_GET['id']))
{
	$id = $_GET['id'];
}

if (isset ($_GET['name']))
{
	$name = $_GET['name'];
	$mail = $name . "@" . $maildomain;
}

if (strlen ($name) > 0 && strlen ($id) > 0)
{
	$output = $xmlstart;
        $output .= "<feed xmlns=\"http://www.w3.org/2005/Atom\">\r\n";
        $output .= "<author> <name>" . $name . "</name> </author>\r\n";
        $output .= "<title>Mail " . $id . " an " . $mail . "</title>\r\n";
        $output .= "<id>urn:uuid:c0cfbe9e-bc42-45cf-928f-7521b8b482ee</id>\r\n";
        $output .= "<updated>" . $atomdate . "</updated>\r\n";

	mb_internal_encoding("UTF-8");
	$inbox = imap_open($hostname,$username,$password) 
		or die('Cannot connect to Gmail: ' . imap_last_error());
	$emails = imap_search($inbox,'TO "' . $mail . '"');
	if($emails) {
	  rsort($emails);
	
	  foreach($emails as $email_number) {
	    if ($id == $email_number) 
	    {
		    $overview = imap_fetch_overview($inbox,$email_number,0);
		    getmsg($inbox,$email_number);
		    if (strtolower ($charset) != "utf-8")
		    {
			$htmlmsg  = utf8_encode ($htmlmsg);
			$plainmsg = utf8_encode ($plainmsg);
		    }
		    $message = $htmlmsg; // Default
		    if (strlen ($plainmsg) > strlen ($htmlmsg))
		    {
			$message = $plainmsg; // Fallback
			header("Content-Type: text/plain"); 
		    } else {
			header("Content-Type: text/html; charset=utf-8"); 
		    }
		    $alt = array ("=C4","=D6","=DC" ,"=DF" ,"=E4" ,"=F6" ,"=FC", "=A1", "=BF", "=E1",
				  "=E9","=ED","=F3" ,"=FA" ,"=F1" ,"=D1" ,"=E0", "=E2", "=E7", "=F4",
				  "=E9","=E8","=EA" ,"=EB" ,"=EE" ,"=FB" ,"=F9" ,"=BD", "=3D", "=A7",
				  "=B0","=20","=0A=","=\r\n");
		    $neu = array( "Ä","Ö","Ü","ß","ä","ö","ü","¡","¿","á",
				  "é","í","ó","ú","ñ","Ñ","à","â","ç","ô",
				  "é","è","ê","ë","î","û","ù","œ","=","§",
				  "°"," "," ","\r\n");

		    $content = str_replace($alt,$neu,$message);  
	    }
	  }
	  
	}
	imap_close($inbox);
	if (strlen ($content) > 0)
	{
		// E-Mail ausgeben
		$mailtitle = mb_decode_mimeheader(str_replace('_', ' ', $overview[0]->subject));
		$maildate = $overview[0]->date; // umwandeln in das ATOM Format
		$output .= "<entry>
                    <title>" . $mailtitle . "</title>
                    <link href=\"http://" . $maildomain . "/details.php?search=" . $name . "&amp;nr=" . $id . "\"/>
                    <id>" . $id . "</id>
                    <updated>" . $maildate . "</updated>
                    <summary>" . $cdatastart . $content . $cdataend . "</summary>
                    <content>" . $cdatastart . $content . $cdataend . "</content>
                    </entry>";
	} else {
		// Fehler ausgeben
		 $output .= "<entry>
                    <title>E-Mail nicht gefunden</title>
                    <link href=\"http://" . $maildomain . "/mail-api.php?name=" . $name . "&amp;id=" . $id . "\"/>
                    <id>" . $id . "</id>
                    <updated>" . $atomdate . "</updated>
                    <summary>" . $cdatastart . "Keine E-Mail mit der Nummer " . $id . " an <b>" . $mail . 
		    "</b> im Posteingang" . $cdataend . "</summary>
                    <content>Evtl. ist Ihre E-Mail noch nicht im Posteingang angekommen. 
                    Bitte versuchen Sie es in wenigen Minuten noch einmal.</content>
                    </entry>";

	}
	$output .= "\r\n</feed>";
} else {
	// Fehler ausgeben
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
                    <summary>Sie müssen einen Namen und die Id der E-Mail angeben, um eine Mail zu lesen.</summary>
                    <content>Beispiel: http://" . $maildomain . "/mail-api.php?name=max-mustermann&id=36. Max Mustermann ist der 
                        Name des Postfachs für die sie die E-Mails abholen möchten und 36 ist die Id der E-Mail. Detailierte Infos zur 
			Nutzung der API finden Sie unter http://" . $maildomain . "/api.php </content>
                  </entry>
                </feed>";

}

echo $output;
?>
