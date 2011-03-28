<?
include "config.php";
include "functions.php";
header('Expires: Thu, 01-Jan-70 00:00:01 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');



$text     = $_GET['search'];
$size     = "200x200";
if (isset ($_GET['download']))
{
	header("Content-Disposition: attachment; filename=$text.png");
	$size = "500x500";
}

header("Content-Type: image/png");


$qr_code = get_qr_code ($text, $size);

echo $qr_code;
?>
