<?
$form = "<center><div id='form'><br><form method='GET'><table >
         <tr><td align=center valign=center><input type='text' name='search' size='20'
           value='" . $searchtxt . "'>@" . $maildomain . "
         </td><td align=center valign=center>
	<button class='imgbutton' type='submit'><img src='/images/load-mail.png'></button>
	</td></tr>";

if (strlen ($searchtxt) > 0)
{
	$myurl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?search=" . $searchtxt; 
	$form .= "<tr><td align=center valign=center colspan=2>
		Permalink: <input type='text' size='50' value='" . $myurl . "' readonly>
		</td></tr>";
}

$form .= "</table></form></div></center>";
?>
