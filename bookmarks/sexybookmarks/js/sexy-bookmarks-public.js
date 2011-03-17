jQuery(document).ready(function () {
    jQuery(".shr-bookmarks a.external").attr("target", "_blank");
	
	var c = jQuery(".shr-bookmarks").height(),
        d = jQuery(".shr-bookmarks ul.socials").height(),
		h = jQuery(".shr-bookmarks div.shr-getshr").outerHeight(true);
		
	d > c && jQuery(".shr-bookmarks-expand").hover(function () {
        jQuery(this).animate({
            height: (d + h) + "px"
        }, {
            duration: 400,
            queue: false
        })
    }, function () {
        jQuery(this).animate({
            height: c + "px"
        }, {
            duration: 400,
            queue: false
        })
    });
    if (jQuery(".shr-bookmarks-center") || jQuery(".shr-bookmarks-spaced")) {
        var a = jQuery(".shr-bookmarks").width(),
            b = jQuery(".shr-bookmarks:first ul.socials li").width(),
            e = jQuery(".shr-bookmarks:first ul.socials li").length,
            f = Math.floor(a / b);
        b = Math.min(f, e) * b;
        if (jQuery(".shr-bookmarks-spaced").length > 0) {
            a = Math.floor((a - b) / (Math.min(f, e) + 1));
            jQuery(".shr-bookmarks ul.socials li").attr("style", 'margin-left:' + a + 'px !important')
        } else if (jQuery(true)) {
            a = (a - b) / 2;
            jQuery(".shr-bookmarks-center").attr("style", 'margin-left:' + a + 'px !important')
        }
    }
	
	if( h > 0 &&  (jQuery(".shr-bookmarks-expand").length == 0
					|| !(d>c))) {
		jQuery(".shr-bookmarks").height(c+h);
	}
	
	var sText = getShareText();
	if(sText != "") {
		jQuery(".shr-bookmarks div.shr-getshr a").text(sText);
		jQuery(".shr-bookmarks").hover(function() {
			jQuery(".shr-bookmarks div.shr-getshr").css('visibility','visible');
		}, function () {
			jQuery(".shr-bookmarks div.shr-getshr").css('visibility','hidden');
		});
	}
});

function getShareText() {
	var sName = getBrowser();
	var sText = "";
	if(sName != "") {
		sText = "Get Shareaholic for " + sName;
	}
	return sText;
}

function getBrowser() {
	var sUA = navigator.userAgent;
	var sName = "";
	if(sUA.indexOf("MSIE") != -1 ) {
		sName = "Internet Explorer";
	} else if(sUA.indexOf("Firefox") != -1 ) {
		sName = "Firefox";
	} else if(sUA.indexOf("Flock") != -1 ) {
		sName = "Flock";
	} else if(sUA.indexOf("Chrome") != -1 ) {
		sName = "Google Chrome";
	} else if(sUA.indexOf("Safari") != -1 ) {
		sName = "Safari";
	} else if(sUA.indexOf("Opera") != -1 ) {
		sName = "Opera";
	} else if(sUA.indexOf("Songbird") != -1 ) {
		sName = "Songbird";
	} 
	return sName;
}