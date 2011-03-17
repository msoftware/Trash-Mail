<?
include "config.php";
include "functions.php";
include "phpmailer.php";

session_start(); 
include("inc/dapphp-securimage/securimage.php");

header("Content-Type: text/html; charset=utf-8"); 


// Kontaktformular
$validation = array ();
$validation['mail'] = 0;
$validation['name'] = 0;
$validation['from'] = 0;
$validation['captcha'] = 0;

$img = new Securimage();
if (isset ($_POST['from']))
{
	$valid = $img->check($_POST['code']);
	if($valid == true) {
		$validation['captcha'] = 1;
	} else {
		$validation['captcha'] = 2;
	}
}

$from = "";
if (isset ($_POST['from']))
{
	$from = $_POST['from'];
	$validation['from'] = 1;
	if (strlen ($from) < 1) $from = "Unbekannt ";
}

$name = "";
if (isset ($_POST['name']))
{
	$name = $_POST['name'];
	$validation['name'] = 1;
	if (strlen ($name) < 1) $name = "Homie";
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

$valid = 0;
foreach ($validation as $validdata)
{
	if ($validdata > $valid)
		$valid = $validdata;
}

$empfehlung = "Hi $name,

$from meint, Du solltest dir unbedingt den Wegwerf E-Mail Dienst von $maildomain anschauen, 
damit Du Dein E-Mail Postfach in Zukunft spamfrei halten kannst.

Interessiert? Dann schau mal hier vorbei:

http://$maildomain

Nachricht von $from:

----------
Der Open Source Wegwerf E-Mail Service
http://$maildomain";

if ($valid <> 1)
{
	include "empfehlenform.php";
} else {
	if (strlen ($name) == 0) $name = null;
	$date = date("D M j G:i:s T Y");

	$mailok = sendMail ($username, $title , $mail, $name, 
			    "Empfehlung von $from ", 
			    $empfehlung);

	include "empfehlenok.php";
}


$pagetitle .= " weiterempfehlen";
$text = "Sie finden den Wegwerf E-Mail Dienst von " . $maildomain . " interessant?<br>
Wenn das so ist, empfehlen Sie uns doch an Freunde und Bekannte weiter. Der Empfänger der Nachricht bekommt dann 
eine Email, mit Ihrer Empfehlung und dem Link zum dieser Webseite. E-Mmail Adressen werden natürlich weder gespeichert noch
 weitergegeben.<br>

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
