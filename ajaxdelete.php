<?
include "config.php";
include "functions.php";
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT\n");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

$nr = "";
if (isset ($_GET['nr']))
{
	$nr = intval($_GET['nr']);
}

if (strlen ($nr) > 0)
{
	mb_internal_encoding("UTF-8");
	$inbox = imap_open($hostname,$username,$password) 
		or die('Cannot connect to Gmail: ' . imap_last_error());
	$emails = imap_delete($inbox,$nr);
	imap_expunge($conn);
	imap_close($inbox);
}

echo "OK";
?>
