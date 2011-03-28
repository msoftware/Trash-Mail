<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title><?=$title?></title>
<script type="text/javascript" src="/bookmarks/jquery-1.5.1.js"></script>
<script type="text/javascript" src="/bookmarks/bookmarks-public.js"></script>

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jqModal.js"></script>
<script type="text/javascript" src="/js/popup.js"></script>

<link rel="stylesheet" type="text/css" href="/bookmarks/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/css/popup.css" media="screen" />

<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>

</head>
<body><center>

<div id='header'>
  <div class='navigation'>
    <a class='navigation' href="/">Wegwerf E-Mail</a></li>
    <a class='navigation' href="/faq.php">FAQ</a></li>
    <a class='navigation' href="/about.php">Über</a></li>
    <a class='navigation' href="/api.php">API</a></li>
    <a class='navigation' href="/kontakt.php">Kontakt</a></li>
  </div>
   <h1><?=$title?></h1>
<div>

<div id='body'>
    <? if (isset ($pagetitle)) { ?> <h2><?=$pagetitle?></h2> <? } ?>
    <? if (isset ($text)) { ?> <p id='text'> <?=$text?>   </p> <? } ?>

<? include "bookmarks/bookmarks.php"; ?>
    <? if (isset ($form)) { ?> <?=$form?> <? } ?>
    <p>	<?=$output?> </p>
</div>

<div class="jqmWindow" id="dialog"></div>

<div id='footer'>
    <p id="footer"><?=$footer?></p>
</div>
<br>
</center></body></html>
