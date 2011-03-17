=== SexyBookmarks ===
Contributors: shareaholic
Tags: sexybookmarks,sexy bookmarks,sexy,social bookmarking,social,bookmarks menu,bookmarking,share,goo.gl,googl,url shortener,bit.ly,bitly,sharethis,sharing,saving,posting,sharing is sexy,google,google buzz,buzz it,button,seo,stats, digg,delicious,diigo,myspace,twitter,facebook,gmail,email,e-mail,technorati,reddit,stumbleupon,yahoo,shareaholic,addtoany,sharedaddy,sociable,wpmu
Requires at least: 2.7
Tested up to: 3.0.4
Stable tag: 3.3.2
Adds an attractive social bookmarking menu to your posts, pages, index, or any combination of the three.


== Description ==
Though the name may be a little "edgy" for some, SexyBookmarks has proven time and time again to be an extremely useful and successful tool in getting your readers to actually **submit your articles** to numerous social bookmarking sites. 

Our sole aim was to stray away from the "in the box" thinking behind most social bookmarking plugins, and add a little flair that would entice your readers, rather than deterring them with microscopic icons that get lost in pages heavy laden with content.


= Recent Updates =
* Lots of fixes to the beta thanks to your feedback.  We're getting close to switching over completely!
* Switched over to use the Share API (http://shareapi.com)
* Share Counters for Twitter and Facebook! (beta exclusive)
* Fix for Arras theme
* Adds official support for Google's URL shortener (goo.gl)
* Fixes slow page load issue
* Loads of behind the scenes performance improvements


= Recently Added Sites =
* Yahoo! Mail
* Google Gmail
* Hotmail
* Buzzster!


== Other Notes ==

= Special Thanks & Credits =

The plugin wouldn't be half of what it is today if it weren't for people like you who take the time to help it grow! Whether it be by submitting bug reports, translations, or maybe even a little development help. 

Listed here are credits and special thanks to some of you who have helped us out a great deal:  [Shareaholic.com](http://www.shareaholic.com/tools/wordpress/credits)


= Translations =
* Credit goes to [Maitre Mo](http://maitremo.fr) for translating to French
* Credit goes to [Yuri Gribov](http://wp-ru.ru) for translating to Russian
* Credit goes to [Ghenciu Ciprian](http://www.osn.ro) for translating to Romanian
* Credit goes to [Carlo Veltri](http://chepelle.altervista.org/wordpress) for translating to Italian
* Credit goes to [Damjan Gerli](http://www.damjan.net) for updating the Italian translation
* Credit goes to [Joojen](http://www.keege.com) for translating to Chinese
* Credit goes to [Javier Pimienta](http://cpcdisseny.net) for translating to Spanish
* Credit goes to [Giovanni Zuccaro](http://www.giovannizuccaro.it) for updating the Italian translation
* Credit goes to [Omer Taylan Tugut](http://www.tuguts.com) for translating to Turkish
* Credit goes to [Gunther Wegner](http://gwegner.de) for translating to German
* Credit goes to [Mads Floe](http://hardwareblog.dk) for translating to Danish
* Credit goes to [Svend Olaf Olsen](http://www.mediaprod.no) for translating to Norwegian
* Credit goes to [Martin van der Grond](www.gouwefoto.nl) for translating to Dutch
* Credit goes to [Modar Soos](http://www.sada-sy.com) for translation to Arabic
* Credit goes to [Magnus Th&ouml;rnblad](http://www.th&ouml;rnblad.se) for translating to Swedish
* Credit goes to [Kerem Erkan](http://keremerkan.net) for updating the Turkish translation
* Credit goes to [Nick Mouratidis](http://www.kepik.gr) for translating to Greek
* Credit goes to [Manuel In&aacute;cio](http://minacio.com/blog) for translation to Portuguese
* Credit goes to [Barukar](http://www.classinoiva.com.br) for translation to Portuguese (Brazil)

= Thanks =
* Thanks to [Saidmade Labs](http://labs.saidmade.com/) for the original plugin core
* Thanks to [Liam McKay](http://wefunction.com/2008/07/function-free-icon-set/) for the original "Function Icon Set"
* Thanks to [Kieran Smith](http://www.kieransmith.net/) for additional development help.
* Thanks to [Yuri Gribov](http://wp-ru.ru) for origianl i18n help.
* Thanks to [Crey Design](http://creydesign.com) for the new background image.
* Thanks to [Sascha Carlin](http://itst.net/) for the patch to make the plugin work with single instance of menu
* Thanks to [Artem Russakovskii](http://beerpla.net) for help with restricting location of scripts and styles
* Thanks to [Konstantin Kovshenin](http://kovshenin.com/) for help with the bit.ly bug
* Thanks to [Alison Barrett](http://alisothegeek.com/2009/10/fugue-sprite-css/) for the idea of making a fugue icon sprite
* Thanks to [Norman Yung](http://www.robotwithaheart.com/) for previous development help
* Thanks to [Gautam Gupta](http://gaut.am/) for previous development help
* Thanks to [Kerem Erkan](http://keremerkan.net) for the Dynamic Sprite Generator


== Screenshots ==

1. A quick preview of the final outcome (excess hidden)
2. Another preview of the final outcome with excess networks displayed upon hover
3. A preview of the admin panel associated with the plugin

== Installation ==

1. Upload the extracted archive to `wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu
3. Open the plugin settings page Settings -> SexyBookmarks
4. Adjust settings to your liking
4. Enjoy!

= Manual Usage =
**As of v2.5 the menu can be inserted once anywhere within your site (even outside the loop) and it will still pull the appropriate data for the dynamic links**

If you would like to insert the menu manually, simply choose "Manual Mode" from the options page, then place the following code into your theme files where you want the menu to appear:

`<?php if(function_exists('selfserv_shareaholic')) { selfserv_shareaholic(); } ?>`

You can still configure the other options available when inserting manually and they will be passed to the function. This is for those of you who have requested to be able to place the menu anywhere you choose... Enjoy!


== Frequently Asked Questions ==
= Where can I find a detailed FAQ? =
Please see here: [Frequently Asked Questions](http://sexybookmarks.shareaholic.com/documentation/faq)

= Where can I get detailed Usage & Installation instructions? =
Please see here: [Usage & Installation Instructions](http://sexybookmarks.shareaholic.com/documentation/usage-installation)


== Changelog ==

= 3.3.2 =
* Quick fix for admin menu PHP error

= 3.3.1 =
* Fix for W3C validation errors (thanks to [Maitre Mo](http://maitremo.fr))
* Fix for Twitter breaking for certain custom templates
* Removed support for sl.ly URL shortener due to poor performance
* Revamped sidebar menu

= 3.2.12 =
* Updated Twitter definition
* Various jQuery related bug fixes

= 3.2.11 =
* Lots of fixes to the beta thanks to your feedback.  We're getting close to switching over completely!
* Much improved jQuery conflict detection for beta users
* New alert that reminds users to re-save their settings on upgrade
* Switched over to use the Share API (http://shareapi.com)

= 3.2.10 =
* Share Counters for Twitter and Facebook! (beta exclusive)
* Admin toggle for Shareaholic promo link

= 3.2.9 =
* Fix for a W3C validation error
* Updated Arabic translation (by [Modar Soos](http://www.sada-sy.com))
* Updated French translation (by [Maitre Mo](http://maitremo.fr))
* Updated Portuguese (Brazil) translation (by [Barukar](http://www.classinoiva.com.br))
* Includes link to Shareaholic Browser Tools

= 3.2.8 =
* Fix for Arras theme
* Depreciating `selfserv_sexy()` function.  It has been replaced with `selfserv_shareaholic()`
* Admin toggle for Perf script

= 3.2.7 =
* Adds support for Google's URL shortener (goo.gl)
* Updated Bit.ly shortening
* Updated Greek translation (by [Nick Mouratidis](http://www.kepik.gr))

= 3.2.6 =
* Quick fix for admin area (icons)

= 3.2.5 =
* Fixes slow page load issue
* Compatibility fixes for WP v3.0.3
* xhtml compliance fix
* Updated "Most Popular" services list
* Service list now has titles!  Find services in a snap

= 3.2.4.2 =
* Removed warning messages about WP_FOOTER and WP_HEAD

= 3.2.4.1 =
* Fixed SAFE_MODE issue regarding fopen()
* Fixed mkdir() issue by changing to wp_mkdir_p()
* Fixed $d_tags and $keywords undefined problem
* Fixed typo in request URL leading to errors being returned
* Fixed manual mode when using BETA
* Removed timeout from http request

= 3.2.4 =
* Complete re-write to increase efficiency and speed

= 3.2.3.1 =
* Small bug fix for short URLs when cURL not enabled
* Removed Fleck as it no longer exists
* Removed "Load scripts in footer" from default settings

= 3.2.3 =
* Added urldecode() to bitly and supr JSON requests
* Removed fopen() from the sprite request, now uses the WP http api
* Updated translation folder definition to filesystem path
* Updated the Italian translation

= 3.2.2 =
* Added Portuguese translation (pt_PT)
* Fixed problem with su.pr short URLs not working
* Fixed persistent bug from 3.2
* Fixed error in stylesheet name
* Added referrer to API request

= 3.2.1.1.2 =
* Fixed JS counter
* Complete revamp of naming scheme

= 3.2.1.1.1 =
* Better activation hook to check old naming scheme

= 3.2.1.1 =
* Fixed charset problem with htmlspecialchars()
* Names are now automatically replaced from sexy- to shr- upon upgrade/activation
* Fixed issue causing one icon to display multiple times
* Fixed expanding blank space issue
* Fixed caching issue by adding version number to file names rather than as parameters

= 3.2 =
* Resolved security issue
* Added Buzzster!, Yahoo! Mail, Gmail, & Hotmail
* Fixed GoogleBuzz link (didn't validate)
* Fixed mailto link
* Changed jQuery to $ in all scripts (with noconflict)
* Changed all CSS classes from sexy- to shr- in public css
* Renamed images from sexy- to shr-
* Added new Google Reader and Twitter icons
* Integrated new "configure tweet" method
* Removed twitter ID field
* Updated custom mods function with new image names
* Custom mods function now copies style-dev.css rather than the minified (style.css)
* Dynamic Sprite Generator API now live for everyone to use!
* Tested with WP3.0 (passed with flying colors!)
* Added feature to automagically reset all short URLs when you select a new service
* Added option to display menu above AND below content
* Updated translations

= 3.1.3 =
* Added Settings link to plugin display panel
* Fixed issue with feed not displaying links properly
* Small admin changes
* Final fix for annoying bullets in menu

= 3.1.2 =
* Fixed accessibility issue with RTL languages
* Fixed validity issue with links (unescaped ampersands)
* Fixed issue with icons not appearing correctly for Google Reader and Google Bookmarks

= 3.1.1 =
* Quick bug fix for the bug that appeared immediately after releasing 3.1

= 3.1 =
* Many improvements in the coding efficiency
* Removed Devmarks as it no longer exists
* Updated the old Google Bookmarks icon
* Added new feature to Mister-Wong so that now the *.com* extension is replaced dynamically based on your locale
* Removed DesignMoo and Blogosphere News
* Added DZone
* Added Kaevur (Estonian)
* Added Virb
* Added Box.net
* Added Google Reader
* Added Bonzobox
* Added Zabox
* Added OkNotizie (Italian)
* Added Springpad
* Added Plaxo
* Added Viadeo
* Added Google Buzz

= 3.0.1 =
* Fix for fatal error if you downloaded v3.0 before `8:30am CST on Feb 1st, 2010`
* Fix for Google Bookmarks image not displaying correctly
* Fix for spritegen not working if wordpress installed in subdirectory
* Spritegen now outputs minified CSS as well
* Added activation hook to generate sprite automatically upon activating the plugin

= 3.0 =
* New Sprite Image is generated when you save options (If you have PHP5 or above with PHPGD, & don't have custom mods feature on)
* Also reduced the size of the images with Smush It
* Separated Background Images
* Fixed Translation Strings
* Added option to load javascript in blog's footer
* Added compatibility with YOURLS plugin
* Added Settings link in plugin's information section
* Many improvements in the coding efficiency
* Minified public JS
* Added DZone
* Added Kaevur (Estonian)
* Added Virb
* Added Box.net
* Removed Devmarks as it no longer exists
* Added Google Reader
* Updated the old Google Bookmarks icon
* Added Bonzobox
* Added Zabox
* Added OkNotizie (Italian)
* Added Springpad
* Added Plaxo
* Added Viadeo
* Added option to allow you to NOT use a URL shortener if you so choose
* Added new feature to Mister-Wong so that now the *.com* extension is replaced dynamically based on your locale
* Minified stylesheet to save a couple KB

= 2.6.1.3 =
* Updated Danish translation
* Updated French translation
* Added Norwegian translation
* Added Dutch translation
* Fixed validity issue with Strands & Plurk sharing links
* Updated methods of calling styles and scripts
* Fixed issue with sponsor messages not staying hidden
* Fixed JSON compatibility issue due to multiple instances of the JSON class

= 2.6.1.2 =
* Added Plurk
* Added Danish translation
* Fixed dashboard styling in IE
* Removed sidebar ads
* Added new plugin sponsorship network
* Added ability to select all, none, and popular networks
* Added German translation and a german BG image
* Added custom donation form in sidebar

= 2.6.1.1 =
* Added Turkish translation
* Added and updated Italian translation
* Added Tumblr, Strands, Stumpedia, Current, Blogger

= 2.6.1 =
* This is a "re-release" of *v2.6.0*, but hopefully without the massive amounts of errors this time. 
* Also removed any and all API calls the plugin was making so as to prevent SexyBookmarks from being the _culprit_ when it comes to people receiving the "Unexpected http error occurred during the API request" error.
* Removed some old warnings/errors that are no longer needed.
* Solved the riddle of the disappearing footers/sidebars (I think)
* Better optimized the dashboard and image sprites
* I believe this version fixes the problem with bitly creating massive amounts of short URLs for each post, but only time and trial by fire will tell...
* Also added Orkut

= 2.6.0.1 =
* This is actually a rollback release back to 2.5.5.1 due to the very unstable nature of 2.6.0. I'll look into that soon. Sorry for having you all update more than once within such a short span of time. we're having growing pains. --norman

= 2.6.0 =
* Optimized/Reduced file sizes
* Plugin now uses sprite for all icons in dashboard
* Custom mods feature added to prevent mods from being lost during upgrade
* Got rid of feedity and replaced top contributors list with custom function
* Optimized dashboard jQuery functions to be less redundant
* Added wishlist to sidebar
* Added TheWebBlend, Wykop, BlogEngage, Hyves, Pusha, Hatena Bookmarks, MyLinkVault, SlashDot, Squidoo, Propeller, FAQpal, Evernote, Meneame, Bitacoras, JumpTags, Bebo, N4G

= 2.5.5.1 =
* Undo the jQuery compatibility "fix" introduced in 2.5.5 which generated a ridiculous amount of bug reports. JQuery is now a dependency by default instead of the fix which made it optional. If other activated plugins or your theme is including JQuery and NOT using Wordpress's built-in wp_enqueue_script functions, you're doing it wrong!

= 2.5.5 =
* SexyBookmarks now only loads it's CSS/JS if the menu is being displayed on a particular page/post
* Added a jQuery compatibility fix for those of you who have had trouble with jQuery related issues
* Short URLs are now only generated once a post is published
* Fixed validity of links added in last release
* Fixed a couple small dashboard bugs (mostly jQuery related)
* Added Italian translation
* Added Sphinn, Fleck, Xerpi, Netvibes, Netvouz, NUjij, GlobalGrind, Wikio, Blogosphere News, Posterous, Techmeme, eKudos, Ping.fm, ToMuse
* Reinstated email link with simple mailto
* Updated readme with new info
* Fixed issue with Twitter link breaking if title includes quotes
* Updated default translation files
* Added new screenshots

= 2.5.4.1 =
* Fixed fatal error "cannot redeclare plugins_api()"

= 2.5.4 =
* Added update notice
* Fixed a couple minor css issues in dashboard
* Fixed issue where some themes were causing icons to display vertically rather than horizontally
* Added Ning, DesignBump, Hacker News (news.ycombinator), Identica, PrintFriendly to the list
* Added Romanian translation

= 2.5.3.4 =
* Added French translation
* Added ability to turn SexyBookmarks on/off on a post by post basis
* Added more stringent dashboard checks to prevent more conflicts
* Fixed issue with the default URL shortener
* Added [B2L Shortener](http://b2l.me)
* Changed Twitter message from RT @username to (via @username)
* Fixed problem with plugin adding Blog name to beginning of post titles when shared
* Fixed problem with bit.ly URLs breaking and returning error
* Fixed bug causing Twittley default category not to hold it's value

= 2.5.3.3 =
* snuck in fixing issues introduced w/ some css changes.
* also just made another release for those who may have gotten the improper release from last night so you won't have to jump thru hoops to get a fixed version.

= 2.5.3.2 =
* No changes, just fixing SVN hiccup from earlier tonight

= 2.5.3.1 =
* Fixed issue from **v2.5.3** where CSS was not being applied properly
* Fixed issue with bit.ly being stubborn when selected

= 2.5.3 =
* Added i18n / l10n support
* Added Russian translation and several popular Russian bookmarking sites
* Added DesignMoo
* Added bit.ly support and integration
* Fixed plugin conflicts due to jQuery incompatibility


= 2.5.2.3 =
* Added mobile browser check & ability to hide menu from mobile
* Fixed issue with titles & URLs on index pointing to site and not individual articles
* Fixed persistent Twittley error message when saving settings
* Resolved issue with Google Bookmarks link
* Fixed Subscribe to comments link
* Fixed issue with some themes forcing borders and background colors for menu items
* Minor dashboard adjustments

= 2.5.2.2 =
* Changed icon of Fwisp by request of site owner
* Fixed status message problem when trying to dismiss more than one
* Re-added Twitter Friendly Links support after accidental removal
* Added an automatic check/removal of email link for those who previously had it set

= 2.5.2.1 =
* Fixed URL shortening bug from 2.5.2
* Fixed persistent Twitter bug
* Fixed readme problem

= 2.5.2 =
* Added cligs, Supr, Short-to, and Trim as supported URL shortening services
* Added Fwisp as a supported site
* FIXED TWITTER ENCODING BUG!!!
* Updated/Optimized readme file
* Updated screenshot
* Completely redesigned the entire plugin options page
* Refactored some JS code.
* Limited the jQuery selector for "external" links within the .sexy-bookmarks div.
* Do not apply JS when links are set **not** to open in a new window in the case that some other plugin is handling such links.
* Added a few more BG images to choose from.
* Removed email link until further notice.
* Fixed the issue with scripts and styles loading throughout the entire dashboard.
* Fixed small issue with manual mode returning wrong post titles.
* Added Twittley to the list of sites

= 2.5.1 =
* Fixed problem with auto-centering and animation slide effect not working.

= 2.5 =
* Added a permalink structure check so that ALL subscribe to comments links will work no matter how your permalinks are configured.
* Fixed my CSS goof for people who's theme was applying a background color rather than the desired image.
* Added the ability to host your own short URLs by using the [Twitter Friendly Links Plugin](http://wordpress.org/extend/plugins/twitter-friendly-links/).
* You can now choose to place the menu on your site anywhere **once** and it will work throughout the entire site rather than having it displayed on every page/article.
* Added new "smart options" in the admin area (dependent options).
* Added new background image "Share the wealth!".
* Updated the "Sharing is sexy!" and "Sharing is caring!" images.

= 2.4.3 =
* Replaced the deceased Yahoo! MyWeb with Yahoo! Buzz and a few custom features for that particular service.
* Fixed error with images not showing up for Tipd, Tumblr, and PFBuzz.

= 2.4.2 =
* Fixed typo with one of the URL shortening services.
* Fixed the subscribe to comments feed error I created.

= 2.4.1 =
* Small CSS fix for anyone having CSS generated content placed in the menu by their theme's stylesheet.
* Fixed validation error for PFBuzz link.

= 2.4 =
* Added Tipd, Tumblr, and PFBuzz to the list of available sites.

= 2.3.4 =
* Small CSS fix for those of you who don't get the "hover" effect on mouseover.

= 2.3.3 =
* Fixed Snipr URL shortener.
* Minor CSS fixes

= 2.3.2 =
* Added option to reset/refresh all stored short URLs.

= 2.3.1 =
* Fixed auto-centering js not being included when it should be.
* Fixed minor bug causing apostrophes to not be encoded properly for email subject/body.

= 2.3.0 =
* Restyled the admin panel and logically grouped the options/settings.
* Removed use of inline styles (most of them anyway).
* Minor bug fix for servers that don't support short tags (i.e. you're getting all the Array Array Array messages).

= 2.2.4 =
* Added iZeby and Mister Wong to the list of available sites.

= 2.2.3 =
* Fixed minor CSS issue introduced in v2.2.2
* Added option to auto-center the bookmarks menu (via jQuery).

= 2.2.2 =
* Added option to vertically expand multi-rowed bookmark lines on mouseover using jQuery.

= 2.2.1 =
* Fixed problem with short tags that caused an array to print at top of your pages.
* Fixed urlencode of subject and body of email link.
* Fixed code's "validity".
* Title text shows up correctly now rather than displaying the word "Array" when hovering over links.

= 2.2 =
* Icons are now rearrangeable.
* You can now pick your own URL shortening service.
* Code is more efficient and puts less strain on the server.

= 2.1.5 =
* Fixed bug causing email link to break layouts in some cases (minor update, only critical to those using NextGen plugin).

= 2.1.4 =
* Fixed small bug that was messing up the "Quick Edit" styles in the dashboard (minor update, not critical).

= 2.1.3 =
* Replaced cURL command with custom function that stores short URLs in the database to reduce server load.
* Replaced Furl with Diigo since Furl no longer exists.
* Now only fetching short URL if Twitter is selected to be displayed in the menu.

= 2.1.2 =
* Added ability to choose which URL shortening service to use.
* Also added a fallback to file_get_contents() if cURL is not enabled on your server.
* Added another fallback so that if file_get_contents() isn't enabled either, the URL won't be shortened and will simply print the permalink of the post.

= 2.1.1 =
* Fixed the bug causing your sites to crash right and left due to timeouts with the URL shortening service.

= 2.1 =
* Added ability to display menu on main page.
* Fixed 2 minor bugs with email link
* Shortened URLs are now static and do not change with each page refresh.

= 2.0.3 =
* Fixed error causing RSS and Email icons not to show up when using manual method.

= 2.0.2 =
* Fixed the display error for Yahoo and Stumbleupon when using manual method.

= 2.0.1 =
* Fixed the problem with your blogname showing up in each post.
* Also fixed the encoding of **:** and **?** characters.

= 2.0 =
* Added newsvine, devmarks, linkedin, "Email to friend", and "Subscribe to comments".
* Got rid of the table based layout for the admin options area, and replaced it with DIVs.
* Added another option for choosing the background image of the DIV that contains the menu.

= 1.4 =
* FAIL - abandoned development and skipped ahead

= 1.3.4 =
* Done away with all third party URL shortening services. Now using my own service so that you will not receive errors when the max API limit has been reached.

= 1.3.3 =
* Fixed Twitter links (http://is.gd has a new api with tighter restrictions, so now the plugin uses http://ri.ms to shorten links).

= 1.3.2 =
* Added a custom function so that you can now insert the menu into your theme anywhere you choose.

= 1.3.1 =
* Fixed my goof from last night that caused images to disappear.
* Added extra functionality for Twitter link (auto @reply with your Twitter id).
* Twitter link automatically shortens the URL to each post via the API at [IS.GD](http://is.gd).

= 1.3 =
* Corrected a css bug causing the DIV's background image to show.

= 1.2.1 =
* Fixed issue people have been having with an additional overlay of the menu where it shouldn't be (other plugin conflicts).

= 1.2 =
* Critical namespace update, no longer "WP-Social-Bookmarks".
* Added function to allow you to choose page, post, or both.

= 1.1.4 =
* Resolved issue that caused the menu to be placed at top of post even if "below post" was chosen.

= 1.1.3 =
* Fixed bug that caused pages to disappear,
* Now plugin only displays on single posts

= 1.1.2 =
* Fixed issue with custom css section overlapping icons in options page.
* Added custom background styles to the container DIV.

= 1.1.1 =
* Added a custom CSS section for styling the container DIV.

= 1.1 =
* Added Twitter to the list.
* Added a few more options.

= 1.0 =
* Initial release!

== Upgrade Notice ==
= 3.2.3.1 =
Fixed small bug with short URL function which caused it to fail if you do not have cURL enabled

= 3.2.3 =
Tested on several servers which still had issues with the past releases, and worked on each. You should feel more confident about upgrading to this version.

= 3.2.1.2 =
Bug fixes for persistent bugs that weren't fixed in v3.2.1.1

= 3.2.1.1 =
Bug fix release for all bugs that arose with v3.2

= 3.2 =
Finally integrated the sprite generator (long overdue) plus several critical performance bug fixes

= 3.1 =
The dynamic sprite generator has been completely rewritten from scratch, so this *should* be the final attempt at getting all of the inconsistencies and errors fixed in the v3 series that has caused so many problems so far.

= 3.0.1 =
Major bug fixes for v3.0 - Upgrade immediately if you've installed v3.0 as this will fix problems you probably haven't even noticed yet. Will need to go to Settings->SexyBookmarks and save settings again after upgrading.

= 3.0 =
Users whose servers have PHP5+ AND the PHPGD library installed will need to login to their dashboard (Settings -> SexyBookmarks) and click the "Save Changes" button upon upgrading to generate a dynamic image sprite based on your selection of networks.