<?
/* Keine Fehler oder Warnungen ausgeben */
error_reporting(0); 
ini_set('display_errors',0);

/* Trash Mail Scrip Version */
$version = "0.7.5";

/* Google Mail Zugangsdaten */
$username = 'TODO Google MAIL E-MAIL';
$password = 'TODO GOOGLE MAIL PASSWORT';

/* Domain des Wegwerf E-Mail Dienstes */
$maildomain = "TODO IHRE DOMAIN";

/* E-Mail Adresse des Supports für das Kontaktformular */
$supportmail = 'TODO SUPPORT E-MAIL ADRESSE';
$supportname = $maildomain . " Support";

$footer = "<a href='http://www.wegwerf-e-mail-adresse.de/'>Wegwerf E-Mail Adresse</a> V$version - 
	   Copyright 2011 by TODO IHR NAME - 
	   <a href='impressum.php'>Impressum</a> ";

/* Default Settings */
$title = "Wegwerf E-Mail";
$pagetitle = "Wegwerf E-Mail Adresse";

/* GMAIL Configuration */
$hostname = '{imap.googlemail.com:993/imap/ssl/novalidate-cert}INBOX';
$smtphost =  'ssl://smtp.gmail.com:465';

/* Anzahl der Zufalls E-Mail Adressen */
$randommailanz = 12;

/* Namesdateien */
$malenames   = "names/Male-Names";
$femalenames = "names/Female-Names";
$familynames = "names/Family-Names";

/* Feher und Hinweise */
$validstrings['mail'] = "Bitte geben Sie eine gültige E-Mail Adresse an.";
$validstrings['text'] = "Bitte tragen Sie in das Textfeld Ihre Nachricht ein.";
$validstrings['captcha'] = "Bitte tragen Sie den Captcha Code korrekt ein.";
?>
