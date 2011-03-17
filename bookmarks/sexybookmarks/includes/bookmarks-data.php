<?php

// dynamic mister wong link generator
$wong_id = 6;

if(WPLANG == 'de_DE')
	$wong_id = 298;

elseif(WPLANG == 'zh_CN' || WPLANG == 'zh_HK' || WPLANG == 'zh_TW')
	$wong_id = 299;

elseif(WPLANG == 'es_CL'  || WPLANG == 'es_ES' || WPLANG == 'es_PE' || WPLANG == 'es_VE')
	$wong_id = 300;

elseif(WPLANG == 'fr_FR' || WPLANG == 'fr_BE')
	$wong_id = 301;

elseif(WPLANG =='ru_RU' || WPLANG == 'ru_MA')
	$wong_id = 302;

$checkthis_text = __('Check this box to include %s in your bookmarking menu', 'shrsb');

// array of bookmarks
$shrsb_bookmarks_data=array(
	'shr-scriptstyle'=>array(
		'id' => 278,
		'check'=>sprintf($checkthis_text, 'Script &amp; Style'),
		'share'=>__('Submit this to ', 'shrsb').'Script &amp; Style'
	),
	'shr-blinklist'=>array(
		'id'=>48,
		'check'=>sprintf($checkthis_text, 'Blinklist'),
		'share'=>__('Share this on ', 'shrsb').'Blinklist'
	),
	'shr-delicious'=>array(
		'id'=>2,
		'check'=>sprintf($checkthis_text,'Delicious'),
		'share'=>__('Share this on ', 'shrsb').'del.icio.us'
	),
	'shr-digg'=>array(
		'id'=>3,
		'check'=>sprintf($checkthis_text,'Digg'),
		'share'=>__('Digg this!', 'shrsb')
	),
	'shr-diigo'=>array(
		'id'=>24,
		'check'=>sprintf($checkthis_text,'Diigo'),
		'share'=>__('Post this on ', 'shrsb').'Diigo'
	),
	'shr-reddit'=>array(
		'id'=>40,
		'check'=>sprintf($checkthis_text,'Reddit'),
		'share'=>__('Share this on ', 'shrsb').'Reddit'
	),
	'shr-yahoobuzz'=>array(
		'id'=>73,
		'check'=>sprintf($checkthis_text,'Yahoo! Buzz'),
		'share'=>__('Buzz up!', 'shrsb')
	),
	'shr-twittley'=>array(
		'id'=>277,
		'check'=>sprintf($checkthis_text,'Twittley'),
		'share'=>__('Submit this to ', 'shrsb').'Twittley'
	),
	'shr-stumbleupon'=>array(
		'id'=>38,
		'check'=>sprintf($checkthis_text,'Stumbleupon'),
		'share'=>__('Stumble upon something good? Share it on StumbleUpon', 'shrsb')
	),
	'shr-technorati'=>array(
		'id'=>10,
		'check'=>sprintf($checkthis_text,'Technorati'),
		'share'=>__('Share this on ', 'shrsb').'Technorati'
	),
	'shr-mixx'=>array(
		'id'=>4,
		'check'=>sprintf($checkthis_text,'Mixx'),
		'share'=>__('Share this on ', 'shrsb').'Mixx'
	),
	'shr-myspace'=>array(
		'id'=>39,
		'check'=>sprintf($checkthis_text,'MySpace'),
		'share'=>__('Post this to ', 'shrsb').'MySpace'
	),
	'shr-designfloat'=>array(
		'id'=>106,
		'check'=>sprintf($checkthis_text,'DesignFloat'),
		'share'=>__('Submit this to ', 'shrsb').'DesignFloat'
	),
	'shr-facebook'=>array(
		'id'=>5,
		'check'=>sprintf($checkthis_text,'Facebook'),
		'share'=>__('Share this on ', 'shrsb').'Facebook'
	),
	'shr-twitter'=>array(
		'id'=>7,
		'check'=>sprintf($checkthis_text,'Twitter'),
		'share'=>__('Tweet This!', 'shrsb')
	),
	'shr-mail'=>array(
		'id'=>201,
		'check'=>sprintf($checkthis_text, __("an 'Email to a Friend' link", 'shrsb')),
		'share'=>__('Email this to a friend?', 'shrsb')
	),
	'shr-tomuse'=>array(
		'id'=>294,
		'check'=>sprintf($checkthis_text,'ToMuse'),
		'share'=>__('Suggest this article to ', 'shrsb').'ToMuse'
	),
	'shr-comfeed'=>array(
		'check'=>sprintf($checkthis_text, __("a 'Subscribe to Comments' link", 'shrsb')),
		'share'=>__('Subscribe to the comments for this post?', 'shrsb'),
		'baseUrl'=>'PERMALINK',
	),
	'shr-linkedin'=>array(
		'id'=>88,
		'check'=>sprintf($checkthis_text,'LinkedIn'),
		'share'=>__('Share this on ', 'shrsb').'LinkedIn'
	),
	'shr-newsvine'=>array(
		'id'=>41,
		'check'=>sprintf($checkthis_text,'Newsvine'),
		'share'=>__('Seed this on ', 'shrsb').'Newsvine'
	),
	'shr-googlebookmarks'=>array(
		'id'=>74,
		'check'=>sprintf($checkthis_text,'Google Bookmarks'),
		'share'=>__('Add this to ', 'shrsb').'Google Bookmarks'
	),
	'shr-googlereader'=>array(
		'id'=>207,
		'check'=>sprintf($checkthis_text,'Google Reader'),
		'share'=>__('Add this to ', 'shrsb').'Google Reader'
	),
	'shr-googlebuzz'=>array(
		'id'=>257,
		'check'=>sprintf($checkthis_text,'Google Buzz'),
		'share'=>__('Post on Google Buzz', 'shrsb')
	),
	'shr-misterwong'=>array(
		'id'=>$wong_id,
		'check'=>sprintf($checkthis_text,'Mister Wong'),
		'share'=>__('Add this to ', 'shrsb').'Mister Wong'
	),	
	'shr-izeby'=>array(
		'id'=>263,
		'check'=>sprintf($checkthis_text,'Izeby'),
		'share'=>__('Add this to ', 'shrsb').'Izeby'
	),
	'shr-tipd'=>array(
		'id'=>188,
		'check'=>sprintf($checkthis_text,'Tipd'),
		'share'=>__('Share this on ', 'shrsb').'Tipd'
	),
	'shr-pfbuzz'=>array(
		'id'=>279,
		'check'=>sprintf($checkthis_text,'PFBuzz'),
		'share'=>__('Share this on ', 'shrsb').'PFBuzz'
	),
	'shr-friendfeed'=>array(
		'id'=>43,
		'check'=>sprintf($checkthis_text,'FriendFeed'),
		'share'=>__('Share this on ', 'shrsb').'FriendFeed'
	),
	'shr-blogmarks'=>array(
		'id'=>27,
		'check'=>sprintf($checkthis_text,'BlogMarks'),
		'share'=>__('Mark this on ', 'shrsb').'BlogMarks'
	),
	'shr-fwisp'=>array(
		'id'=>280,
		'check'=>sprintf($checkthis_text,'Fwisp'),
		'share'=>__('Share this on ', 'shrsb').'Fwisp'
	),
	'shr-bobrdobr'=>array(
		'id'=>266,
		'check'=>sprintf($checkthis_text,'BobrDobr').__(' (Russian)', 'shrsb'),
		'share'=>__('Share this on ', 'shrsb').'BobrDobr'
	),
	'shr-yandex'=>array(
		'id'=>267,
		'check'=>sprintf($checkthis_text,'Yandex.Bookmarks').__(' (Russian)', 'shrsb'),
		'share'=>__('Add this to ', 'shrsb').'Yandex.Bookmarks'
	),
	'shr-memoryru'=>array(
		'id'=>269,
		'check'=>sprintf($checkthis_text,'Memory.ru').__(' (Russian)', 'shrsb'),
		'share'=>__('Add this to ', 'shrsb').'Memory.ru'
	),
	'shr-100zakladok'=>array(
		'id'=>281,
		'check'=>sprintf($checkthis_text,'100 bookmarks').__(' (Russian)', 'shrsb'),
		'share'=>__('Add this to ', 'shrsb').'100 bookmarks'
	),
	'shr-moemesto'=>array(
		'id'=>268,
		'check'=>sprintf($checkthis_text,'MyPlace').__(' (Russian)', 'shrsb'),
		'share'=>__('Add this to ', 'shrsb').'MyPlace'
	),
	'shr-hackernews'=>array(
		'id'=>202,
		'check'=>sprintf($checkthis_text,'Hacker News'),
		'share'=>__('Submit this to ', 'shrsb').'Hacker News'
	),
	'shr-printfriendly'=>array(
		'id'=>236,
		'check'=>sprintf($checkthis_text,'Print Friendly'),
		'share'=>__('Send this page to ', 'shrsb').'Print Friendly'
	),
	'shr-designbump'=>array(
		'id'=>282,
		'check'=>sprintf($checkthis_text,'Design Bump'),
		'share'=>__('Bump this on ', 'shrsb').'DesignBump'
	),
	'shr-ning'=>array(
		'id'=>264,
		'check'=>sprintf($checkthis_text,'Ning'),
		'share'=>__('Add this to ', 'shrsb').'Ning'
	),
	'shr-identica'=>array(
		'id'=>205,
		'check'=>sprintf($checkthis_text,'Identica'),
		'share'=>__('Post this to ', 'shrsb').'Identica'
	),
	'shr-xerpi'=>array(
		'id'=>20,
		'check'=>sprintf($checkthis_text,'Xerpi'),
		'share'=>__('Save this to ', 'shrsb').'Xerpi'
	),
	'shr-techmeme'=>array(
		'id'=>204,
		'check'=>sprintf($checkthis_text,'TechMeme'),
		'share'=>__('Tip this to ', 'shrsb').'TechMeme'
	),
	'shr-sphinn'=>array(
		'id'=>100,
		'check'=>sprintf($checkthis_text,'Sphinn'),
		'share'=>__('Sphinn this on ', 'shrsb').'Sphinn'
	),
	'shr-posterous'=>array(
		'id'=>210,
		'check'=>sprintf($checkthis_text,'Posterous'),
		'share'=>__('Post this to ', 'shrsb').'Posterous'
	),
	'shr-globalgrind'=>array(
		'id'=>89,
		'check'=>sprintf($checkthis_text,'Global Grind'),
		'share'=>__('Grind this! on ', 'shrsb').'Global Grind'
	),
	'shr-pingfm'=>array(
		'id'=>45,
		'check'=>sprintf($checkthis_text,'Ping.fm'),
		'share'=>__('Ping this on ', 'shrsb').'Ping.fm'
	),
	'shr-nujij'=>array(
		'id'=>238,
		'check'=>sprintf($checkthis_text,'NUjij').__(' (Dutch)', 'shrsb'),
		'share'=>__('Submit this to ', 'shrsb').'NUjij'
	),
	'shr-ekudos'=>array(
		'id'=>283,
		'check'=>sprintf($checkthis_text,'eKudos').__(' (Dutch)', 'shrsb'),
		'share'=>__('Submit this to ', 'shrsb').'eKudos'
	),
	'shr-netvouz'=>array(
		'id'=>21,
		'check'=>sprintf($checkthis_text,'Netvouz'),
		'share'=>__('Submit this to ', 'shrsb').'Netvouz'
	),
	'shr-netvibes'=>array(
		'id'=>195,
		'check'=>sprintf($checkthis_text,'Netvibes'),
		'share'=>__('Submit this to ', 'shrsb').'Netvibes'
	),
	'shr-webblend'=>array(
		'id'=>284,
		'check'=>sprintf($checkthis_text,'Web Blend'),
		'share'=>__('Blend this!', 'shrsb')
	),
	'shr-wykop'=>array(
		'id'=>285,
		'check'=>sprintf($checkthis_text,'Wykop').__(' (Polish)', 'shrsb'),
		'share'=>__('Add this to Wykop!', 'shrsb')
	),
	'shr-blogengage'=>array(
		'id'=>286,
		'check'=>sprintf($checkthis_text,'BlogEngage'),
		'share'=>__('Engage with this article!', 'shrsb')
	),
	'shr-hyves'=>array(
		'id'=>105,
		'check'=>sprintf($checkthis_text,'Hyves'),
		'share'=>__('Share this on ', 'shrsb').'Hyves'
	),
	'shr-pusha'=>array(
		'id'=>59,
		'check'=>sprintf($checkthis_text,'Pusha').__(' (Swedish)', 'shrsb'),
		'share'=>__('Push this on ', 'shrsb').'Pusha'
	),
	'shr-hatena'=>array(
		'id'=>246,
		'check'=>sprintf($checkthis_text,'Hatena Bookmarks').__(' (Japanese)', 'shrsb'),
		'share'=>__('Bookmarks this on ', 'shrsb').'Hatena Bookmarks'
	),
	'shr-mylinkvault'=>array(
		'id'=>98,
		'check'=>sprintf($checkthis_text,'MyLinkVault'),
		'share'=>__('Store this link on ', 'shrsb').'MyLinkVault'
	),
	'shr-slashdot'=>array(
		'id'=>61,
		'check'=>sprintf($checkthis_text,'SlashDot'),
		'share'=>__('Submit this to ', 'shrsb').'SlashDot'
	),
	'shr-squidoo'=>array(
		'id'=>46,
		'check'=>sprintf($checkthis_text,'Squidoo'),
		'share'=>__('Add to a lense on ', 'shrsb').'Squidoo'
	),
	'shr-propeller'=>array(
		'id'=>77,
		'check'=>sprintf($checkthis_text,'Propeller'),
		'share'=>__('Submit this story to ', 'shrsb').'Propeller'
	),
	'shr-faqpal'=>array(
		'id'=>287,
		'check'=>sprintf($checkthis_text,'FAQpal'),
		'share'=>__('Submit this to ', 'shrsb').'FAQpal'
	),
	'shr-evernote'=>array(
		'id'=>191,
		'check'=>sprintf($checkthis_text,'Evernote'),
		'share'=>__('Clip this to ', 'shrsb').'Evernote'
	),
	'shr-meneame'=>array(
		'id'=>33,
		'check'=>sprintf($checkthis_text,'Meneame').__(' (Spanish)', 'shrsb'),
		'share'=>__('Submit this to ', 'shrsb').'Meneame'
	),
	'shr-bitacoras'=>array(
		'id'=>288,
		'check'=>sprintf($checkthis_text,'Bitacoras').__(' (Spanish)', 'shrsb'),
		'share'=>__('Submit this to ', 'shrsb').'Bitacoras'
	),
	'shr-jumptags'=>array(
		'id'=>14,
		'check'=>sprintf($checkthis_text,'JumpTags'),
		'share'=>__('Submit this link to ', 'shrsb').'JumpTags'
	),
	'shr-bebo'=>array(
		'id'=>196,
		'check'=>sprintf($checkthis_text,'Bebo'),
		'share'=>__('Share this on ', 'shrsb').'Bebo'
	),
	'shr-n4g'=>array(
		'id'=>289,
		'check'=>sprintf($checkthis_text,'N4G'),
		'share'=>__('Submit tip to ', 'shrsb').'N4G'
	),
	'shr-strands'=>array(
		'id'=>190,
		'check'=>sprintf($checkthis_text,'Strands'),
		'share'=>__('Submit this to ', 'shrsb').'Strands'
	),
	'shr-orkut'=>array(
		'id'=>247,
		'check'=>sprintf($checkthis_text,'Orkut'),
		'share'=>__('Promote this on ', 'shrsb').'Orkut'
	),
	'shr-tumblr'=>array(
		'id'=>78,
		'check'=>sprintf($checkthis_text,'Tumblr'),
		'share'=>__('Share this on ', 'shrsb').'Tumblr'
	),
	'shr-stumpedia'=>array(
		'id'=>192,
		'check'=>sprintf($checkthis_text,'Stumpedia'),
		'share'=>__('Add this to ', 'shrsb').'Stumpedia'
	),
	'shr-current'=>array(
		'id'=>80,
		'check'=>sprintf($checkthis_text,'Current'),
		'share'=>__('Post this to ', 'shrsb').'Current'
	),
	'shr-blogger'=>array(
		'id'=>219,
		'check'=>sprintf($checkthis_text,'Blogger'),
		'share'=>__('Blog this on ', 'shrsb').'Blogger'
	),
	'shr-plurk'=>array(
		'id'=>218,
		'check'=>sprintf($checkthis_text,'Plurk'),
		'share'=>__('Share this on ', 'shrsb').'Plurk'
	),
	'shr-dzone'=>array(
		'id'=>102,
		'check'=>sprintf($checkthis_text,'DZone'),
		'share'=>__('Add this to ', 'shrsb').'DZone'
	),
	'shr-kaevur'=>array(
		'id'=>290,
		'check'=>sprintf($checkthis_text,'Kaevur').__(' (Estonian)', 'shrsb'),
		'share'=>__('Share this on ', 'shrsb').'Kaevur'
	),
	'shr-virb'=>array(
		'id'=>291,
		'check'=>sprintf($checkthis_text,'Virb'),
		'share'=>__('Share this on ', 'shrsb').'Virb'
	),
	'shr-box'=>array(
		'id'=>240,
		'check'=>sprintf($checkthis_text,'Box.net'),
		'share'=>__('Add this link to ', 'shrsb').'Box.net'
	),
	'shr-oknotizie'=>array(
		'id'=>243,
		'check'=>sprintf($checkthis_text,'OkNotizie').__('(Italian)', 'shrsb'),
		'share'=>__('Share this on ', 'shrsb').'OkNotizie'
	),
	'shr-bonzobox'=>array(
		'id'=>292,
		'check'=>sprintf($checkthis_text,'BonzoBox'),
		'share'=>__('Add this to ', 'shrsb').'BonzoBox'
	),
	'shr-plaxo'=>array(
		'id'=>44,
		'check'=>sprintf($checkthis_text,'Plaxo'),
		'share'=>__('Share this on ', 'shrsb').'Plaxo'
	),
	'shr-springpad'=>array(
		'id'=>265,
		'check'=>sprintf($checkthis_text,'SpringPad'),
		'share'=>__('Spring this on ', 'shrsb').'SpringPad',
	),
	'shr-zabox'=>array(
		'id'=>293,
		'check'=>sprintf($checkthis_text,'Zabox'),
		'share'=>__('Box this on ', 'shrsb').'Zabox'
	),
	'shr-viadeo'=>array(
		'id'=>92,
		'check'=>sprintf($checkthis_text,'Viadeo'),
		'share'=>__('Share this on ', 'shrsb').'Viadeo'
	),
	'shr-gmail'=>array(
		'id'=>52,
		'check'=>sprintf($checkthis_text,'Gmail'),
		'share'=>__('Email this via ', 'shrsb').'Gmail'
	),
	'shr-hotmail'=>array(
		'id'=>53,
		'check'=>sprintf($checkthis_text,'Hotmail'),
		'share'=>__('Email this via ', 'shrsb').'Hotmail'
	),
	'shr-yahoomail'=>array(
		'id'=>54,
		'check'=>sprintf($checkthis_text,'Yahoo! Mail'),
		'share'=>__('Email this via ', 'shrsb').'Yahoo! Mail'
	),
	'shr-buzzster'=>array(
		'id'=>1,
		'check'=>sprintf($checkthis_text,'Buzzster!'),
		'share'=>__('Share this via ', 'shrsb').'Buzzster!'
	),
);
ksort($shrsb_bookmarks_data, SORT_STRING); //sort array by keys
?>
