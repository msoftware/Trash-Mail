<?
$myurl = "http://" . $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];


$shr_myurl = urlencode ($myurl);
$shr_mydesc = urlencode ($pagetitle);
?>
<center><div style='width:460px;'>
<div class="shr-bookmarks shr-bookmarks-expand shr-bookmarks-center shr-bookmarks-bg-sexy">
     <ul class="socials">

    	<li class="shr-twitter">
		<a href="http://twitter.com/home?url=<?=$shr_myurl?>&text=<?=$shr_mydesc?>" rel="nofollow" class="external">
			Tweet <?=$title?>!
		</a>
	</li>

    	<li class="shr-facebook">
		<a href="http://www.facebook.com/share.php?t=<?=$shr_mydesc?>&u=<?=$shr_myurl?>" rel="nofollow" class="external">
			Share <?=$title?> on Facebook
		</a>
	</li>

    	<li class="shr-misterwong">
		<a href="http://www.mister-wong.de/index.php?action=addurl&bm_url=<?=$shr_myurl?>&bm_description=<?=$shr_mydesc?>" rel="nofollow" class="external">
			Submit <?=$title?> to Mister Wong
		</a>
	</li>


	 <li class="shr-oneview">
                <a href="http://www.oneview.de/quickadd/neu/addBookmark.jsf?URL=<?=$shr_myurl?>&title=<?=$shr_mydesc?>" rel="nofollow" class="external">
			Submit <?=$title?> to Oneview
                </a>
        </li>

    	<li class="shr-delicious">
		<a href="http://delicious.com/save?jump=yes&url=<?=$shr_myurl?>&title=<?=$shr_mydesc?>" rel="nofollow" class="external">
			Share <?=$title?> on del.icio.us
		</a>
	</li>

    	<li class="shr-mail">
		<a href="empfehlen.php" rel="nofollow" class="external">
			Send <?=$title?> by mail
		</a>
	</li>
    </ul>
</div></div></center>
