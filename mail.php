<?
include "config.php";
include "functions.php";
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT\n");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");


$nr = "";
$search = "";
$output = "";
$searchtxt = "";
if (isset ($_GET['nr']))
{
	$nr = $_GET['nr'];
}

if (isset ($_GET['search']))
{
	$searchtxt = $_GET['search'];
	$search = $searchtxt . "@" . $maildomain;
}

if (strlen ($search) > 0 && strlen ($nr) > 0)
{
	mb_internal_encoding("UTF-8");
	$inbox = imap_open($hostname,$username,$password) 
		or die('Cannot connect to Gmail: ' . imap_last_error());
	// $emails = imap_search($inbox,'ALL');
	$emails = imap_search($inbox,'TO "' . $search . '"');
	if($emails) {
	  rsort($emails);
	
	  foreach($emails as $email_number) {
	    if ($nr == $email_number) 
	    {
		    $overview = imap_fetch_overview($inbox,$email_number,0);
		    getmsg($inbox,$email_number);
/*
foreach ($attachments as $attachment => $acontent)
{
	var_dump ($attachment);
}
*/
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

		    echo str_replace($alt,$neu,$message);  
	    }
	  }
	  
	}
	imap_close($inbox);
}

?>
