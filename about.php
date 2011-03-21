<?
include "config.php";
include "functions.php";
header("Content-Type: text/html; charset=utf-8"); 

$pagetitle = "Über den Wegwerf E-Mail Dienst von " . $maildomain;
$text = "";
$form = "
<center><div id='form' style='padding:30px; font-size:0.9em; text-align:justify;'>

Trash Mail $version bietet Ihnen eine Wegwerf-E-Mail Adresse die sie dazu verweden können, Ihr Postfach spamfrei zu halten und Ihre E-Mail Adresse nicht an jeden weitergeben zu müssen. <br><br>

Trash Mail $version Features:
<ul>
<li>Programmiersprache: PHP
<li>Lizenz: Open Source GPL
<li>Wegwerf E-Mail Generator
<li>Kein eigener Mail Server nötig
<li>XML API
<li>Facebook, Twitter und Social Bookmark Integration
<li>Weiterempfehlen Formular mit Captcha Code
<li>Template basiertes Webdesign
<li>Umfangreiche FAQ
<li>Kontaktformular
</ul>
<br><br>
Ziel von $maildomain ist es, den Nutzern, die alltägliche Last mit dem ärgerlichen Spam im Posteingang zu erleichtern. Neben dem Web Interface steht zu diesem Zweck ebenfalls eine XML API Schnittstelle zur Verfügung mit der die Mail unter anderem in einem RSS Reader abgerufen werden können. Alternativ ist es auch möglich die XML API dazu zu nutzen, um per Script (z.B. PHP) auf die Inhalte der Mails zuzugreifen.
<br><br>

Dieser Wegwerf-E-Mail Service basiert auf einem <a href='https://github.com/msoftware/Trash-Mail'>Open-Source Wegwerf-E-Mail Service</a> der unter der <a href='http://www.gnu.org/copyleft/gpl.html'><acronym title='GNU\'s Not Unix'>GNU</acronym> General Public License</a> lizensiert werden kann. 
Das bedeutet, sie können den Wegwerf-E-Mail Service auf ihrem eigenen Webspace installieren und so ihren eigenen Wegwerf-E-Mail Service betreiben. Dabei ist es egal, ob sie den Dienst öffentlich, kommerziell oder privat anbieten.<br><br>

<a href='https://github.com/msoftware/Trash-Mail/zipball/master'>Download</a><br>

</div>
";
$output = "";

include "template.php";
?>
