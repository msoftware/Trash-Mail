<?php

//Checking for bots
function shrsb_is_bot() {
	$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
	$ip = $_SERVER['REMOTE_ADDR'];
	$isBot = $ip == '66.249.65.39' 
		|| strpos($ua, 'googlebot') !== false 
		|| strpos($ua, 'mediapartners') !== false 
		|| strpos($ua, 'yahooysmcm') !== false 
		|| strpos($ua, 'baiduspider') !== false
		|| strpos($ua, 'msnbot') !== false
		|| strpos($ua, 'slurp') !== false
		|| strpos($ua, 'ask') !== false
		|| strpos($ua, 'teoma') !== false
		|| strpos($ua, 'spider') !== false 
		|| strpos($ua, 'heritrix') !== false 
		|| strpos($ua, 'attentio') !== false 
		|| strpos($ua, 'twiceler') !== false 
		|| strpos($ua, 'irlbot') !== false 
		|| strpos($ua, 'fast crawler') !== false                        
		|| strpos($ua, 'fastmobilecrawl') !== false 
		|| strpos($ua, 'jumpbot') !== false
		|| strpos($ua, 'googlebot-mobile') !== false
		|| strpos($ua, 'yahooseeker') !== false
		|| strpos($ua, 'motionbot') !== false
		|| strpos($ua, 'mediobot') !== false
		|| strpos($ua, 'chtml generic') !== false
		|| strpos($ua, 'nokia6230i/. fast crawler') !== false
	; // $isBot
	return $isBot;
}

//Checking for mobile browsers
function shrsb_is_mobile() {
	$op = strtolower($_SERVER['HTTP_X_OPERAMINI_PHONE']);
	$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
	$ac = strtolower($_SERVER['HTTP_ACCEPT']);
	$isMobile = strpos($ac, 'application/vnd.wap.xhtml+xml') !== false
		|| $op != ''
		|| strpos($ua, 'sony') !== false 
		|| strpos($ua, 'symbian') !== false 
		|| strpos($ua, 'nokia') !== false 
		|| strpos($ua, 'samsung') !== false 
		|| strpos($ua, 'mobile') !== false
		|| strpos($ua, 'windows ce') !== false
		|| strpos($ua, 'epoc') !== false
		|| strpos($ua, 'opera mini') !== false
		|| strpos($ua, 'nitro') !== false
		|| strpos($ua, 'j2me') !== false
		|| strpos($ua, 'midp-') !== false
		|| strpos($ua, 'cldc-') !== false
		|| strpos($ua, 'netfront') !== false
		|| strpos($ua, 'mot') !== false
		|| strpos($ua, 'up.browser') !== false
		|| strpos($ua, 'up.link') !== false
		|| strpos($ua, 'audiovox') !== false
		|| strpos($ua, 'blackberry') !== false
		|| strpos($ua, 'ericsson,') !== false
		|| strpos($ua, 'panasonic') !== false
		|| strpos($ua, 'philips') !== false
		|| strpos($ua, 'sanyo') !== false
		|| strpos($ua, 'sharp') !== false
		|| strpos($ua, 'sie-') !== false
		|| strpos($ua, 'portalmmm') !== false
		|| strpos($ua, 'blazer') !== false
		|| strpos($ua, 'avantgo') !== false
		|| strpos($ua, 'danger') !== false
		|| strpos($ua, 'palm') !== false
		|| strpos($ua, 'series60') !== false
		|| strpos($ua, 'palmsource') !== false
		|| strpos($ua, 'pocketpc') !== false
		|| strpos($ua, 'smartphone') !== false
		|| strpos($ua, 'rover') !== false
		|| strpos($ua, 'ipaq') !== false
		|| strpos($ua, 'au-mic,') !== false
		|| strpos($ua, 'alcatel') !== false
		|| strpos($ua, 'ericy') !== false
		|| strpos($ua, 'up.link') !== false
		|| strpos($ua, 'vodafone/') !== false
		|| strpos($ua, 'wap1.') !== false
		|| strpos($ua, 'wap2.') !== false
	; // $isMobile
	return $isMobile;
}