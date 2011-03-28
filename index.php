<?
include "config.php";
include "functions.php";
header("Content-Type: text/html; charset=utf-8"); 
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT\n");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");


$search = "";
$output = "";
$searchtxt = "";
if (isset ($_GET['search']))
{
	$searchtxt = $_GET['search'];
	$search = $searchtxt . "@" . $maildomain;
}

if (strlen ($search) > 0)
{
	mb_internal_encoding("UTF-8");
	$inbox = imap_open($hostname,$username,$password) 
		or die('Cannot connect to Gmail: ' . imap_last_error());
	// $emails = imap_search($inbox,'ALL');
	$emails = imap_search($inbox,'TO "' . $search . '"');
	if($emails) {
	  rsort($emails);
	
	  foreach($emails as $email_number) {
	    $overview = imap_fetch_overview($inbox,$email_number,0);
	    $mailurl = '.php?search=' . $searchtxt . '&nr=' . $email_number;
	    $iframe = '<iframe width="100%" height="150" scrolling="yes" marginheight="0" ' .
		      'marginwidth="0" frameborder="0" name="/mail' . $email_number . '" ' .
		      'src="mail' . $mailurl . '"></iframe>';
	 
	    $output.= '<div id="email' . $email_number . '" class="email">';
	    $output.= '<table cellpadding=3 cellspacing=1 border=0 bgcolor=#EEEEEE width=95%>';
	    $output.= '<tr><td colspan="2" bgcolor="#FFFFFF"><b><a href="/details' . $mailurl .'">';
	    $output.= mb_decode_mimeheader(str_replace('_', ' ', $overview[0]->subject));
	    $output.= '</a></b></td>';
	    $output.= '<td rowspan="2" width="40" align="center" valign="center" bgcolor="#FFFFFF">';
	    $output.= '<a href="delete.php?nr=' . $email_number . '" class="jqModal">';
	    $output.= '<img src="/images/delete.png" border="0"></a></td>';
	    $output.= '</tr><tr><td bgcolor="#FFFFFF">'.$overview[0]->from;
	    $output.= '</td><td bgcolor="#FFFFFF">'.$overview[0]->date . '</td></tr>';
	    $output.= '<tr><td colspan="3">' . $iframe . '</td></tr>';
	    $output.= '</table></div>';
	  }
	  
	} else {
	   $output = "<p class='msg'>Keine E-Mails für <b>" . $search . "</b> im " .
		     " Posteingang gefunden<br>" .
		     " Evtl. sind Ihre E-Mails noch nicht im Posteingang angekommen. " .
		     " Bitte versuchen Sie es in wenigen Minuten noch einmal.";
	}
	imap_close($inbox);
} else {
	$mails = getRandomEMails($randommailanz);
	$output = "<h2>Zufällig generierte E-Mail-Adressen</h2><div id='randomlinks'>";
	foreach ($mails as $mail)
	{
		$link = "<a href='/?search=" . $mail['name'] . "'>" . $mail['adress'] . "</a>";
		$output .= "<div class='random'>" . $link . "</div>";
	}
	$output .= "<div style='clear:both;'></div></div>";
}


$title = "Wegwerf E-Mail";
$pagetitle = "Wegwerf E-Mail Adresse";
include "text.php";
include "form.php";
include "template.php";

?>
