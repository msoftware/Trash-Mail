<?
include "config.php";
include "functions.php";
include "faqtext.php";
header("Content-Type: text/html; charset=utf-8"); 

$pagetitle .= " FAQ";
$text = "";
$form = $faqtext;
$output = "";

include "template.php";
?>
