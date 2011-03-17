<?
include "config.php";
include "functions.php";
include "phpmailer.php";

header("Content-Type: text/html; charset=utf-8"); 


// Kontaktformular
$validation = array ();
$validation['mail'] = 0;
$validation['name'] = 0;
$validation['text'] = 0;

$name = "";
if (isset ($_POST['name']))
{
	$name = $_POST['name'];
	$validation['name'] = 1;
}
$mail = "";
if (isset ($_POST['mail']))
{
	$mail = $_POST['mail'];
	if (check_email_address($mail))
	{
		$validation['mail'] = 1;
	} else {
		$validation['mail'] = 2;
	}

}
$text = "";
if (isset ($_POST['text']))
{
	$text = $_POST['text'];
	if (strlen ($text) > 1)
	{
		$validation['text'] = 1;
	} else {
		$validation['text'] = 2;
	}
}

$valid = 0;
foreach ($validation as $validdata)
{
	if ($validdata > $valid)
		$valid = $validdata;
}

if ($valid <> 1)
{
	include "kontaktform.php";
} else {
	if (strlen ($name) == 0) $name = null;
	$date = date("D M j G:i:s T Y");
	$mailok = sendMail ($username, $title , $supportmail, $supportname, 
			    "Kontaktformular " . $maildomain . " " . $date, 
			    "Name: " . $name . "\r\nMail: " . $mail . "\r\n\r\n" . $text, $mail, $name);


	include "kontaktok.php";
}


$pagetitle .= " Kontakt";
$text = "Wir freuen uns über Ihren Besuch auf " . $maildomain . " und über Ihr Interesse an unserem Wegwerf E-Mail Dienst. 
Gerne können Sie dieses Kontaktformular dazu nutzen, uns Ihre Wünsche mitzuteilen. Sie erhalten die Antworten per Email 
von unserem Support.<br>
Wenn Sie dieses Formular nutzen, füllen Sie es bitte vollständig aus, damit wir Ihnen eine Antwort auf Ihr Anliegen geben
können.
<br>
<div style='text-align:left; padding-left:100px; padding-right:100px;'>
<b>Hinweise:</b><br><ul>
<li>Die mit einem Stern <b>*</b> gekennzeichneten Felder müssen ausgefüllt werden.<br>
<li>Sie erhalten eine Kopie des Kontaktformulars als Bestätigung an Ihre E-Mail-Adresse.<br>
<li>Ihre Adresse wird in keiner Adress-Datenbank gespeichert und auch nicht für Newsletterverteiler oder andere Marketing Maßnahmen
verwendet.</ul></div>";

$output = "";

include "template.php";
?>
