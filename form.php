<?
$form = "<center><div id='form'><br><form method='GET'><table >
         <tr><td align=center valign=center><input type='text' name='search' size='20'
           value='" . $searchtxt . "'>@" . $maildomain . "
         </td><td align=center valign=center>
	<button class='imgbutton' type='submit'><img src='/images/load-mail.png'></button>
	</td>";

if ($validemail == true)
{
	$form .= "<td rowspan='3' align='center'><div id='qrcode'><img src='qrcode.php?search=" . $searchtxt . "'></div>" .
		 "<a href='qrcode.php?search=" . $searchtxt . "&download=1'>Download</a>";
}

$form .= "</tr>";

if ($validemail == true)
{
	$myurl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?search=" . $searchtxt; 
	$form .= "<tr><td align=center valign=center colspan=2>
		Permalink: <input type='text' size='50' value='" . $myurl . "' readonly>
		</td></tr><tr><td colspan='2'>E-Mail Adresse: <h2 class='mail'>" . 
			$searchtxt . "@" . $maildomain . "</h2></td></tr>";
}

$form .= "</table></form></div></center>";
?>
