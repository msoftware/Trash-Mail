<?
include "config.php";
include "functions.php";
header("Content-Type: text/html; charset=utf-8");

$pagetitle = "Ihre E-Mail";

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

	$mailurl = '.php?search=' . $searchtxt . '&nr=' . $nr;
        $iframe = '<center><iframe width="90%" height="450" scrolling="yes" marginheight="0" ' .
                  'marginwidth="0" frameborder="1" name="/mail' . $nr . '" ' .
                  'src="mail' . $mailurl . '"></iframe></center>';
	$output = $iframe;

}


$myurl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$myurl .= "?search=" . $searchtxt . "&nr=" . $nr;
$form = "<center><div id='form'><br><table>
	<tr><td align=center valign=center>
	<a href='/?search=" . $searchtxt . "' class='navlink'>Zurück zum Posteingang</a>
	</td></tr>
	<tr><td align=center valign=center>
	Permalink: <input type='text' size='50' value='" . $myurl . "' readonly>
	</td></tr>
	</table></div></center>";

include "template.php";
?>
