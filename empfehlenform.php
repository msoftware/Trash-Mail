<?
$form = " <center><div id='form'> <br><form method='POST'><table border=0>";

/* Fehlermeldungen erzeugen */
if ($valid  == 2)
{
	// Fehler bei der Eingabenvalidierung
	foreach ($validation as $vname => $validdata)
	{
		if ($validdata == 2)
		{
			$form .= "<tr><td align=left valign=top style='color:#EE0000; font-size:1.07em;' colspan='3'>";
			$form .= "Fehler: " . $validstrings[$vname] .  "<br>";
			$form .= "</td></tr>";
		}
	}
}

$form .= "
	<tr> 	<td align=right valign=center>Ihr Name</td><td></td>
		<td align=left valign=top><input type='text' name='from' value='" . $from . "' size='60'></td></tr>
        <tr class='validation" . $validation['from'] . "'> 	
	<tr> 	<td align=right valign=center>Empfänger Name</td><td></td>
		<td align=left valign=top><input type='text' name='name' value='" . $name . "' size='60'></td></tr>
        <tr class='validation" . $validation['mail'] . "'> 	
		<td align=right valign=center>Empfänger E-Mail:</td><td>*</td>
		<td align=left valign=top class='inp'><input type='text' name='mail' value='" . $mail . "' size='60'></td></tr>
        <tr class='validation" . $validation['captcha'] . "'>
		<td align=right valign=center>
		Captcha: </td><td>*</td><td  class='inp'>
	      <img id='siimage' align='left' style='margin:5px; border:1px solid silver;' 
			src='/inc/dapphp-securimage/securimage_show.php?sid=" . md5(time()) . "' />
		 <input type='text' name='code' size='12' />

	</td></tr>
        <tr><td align=center valign=center></td><td></td><td align=right valign=center>
	<button class='imgbutton' type='submit'><img src='/images/senden.png'></button>
	</td></tr>
	</table></form></div></center>";
?>
