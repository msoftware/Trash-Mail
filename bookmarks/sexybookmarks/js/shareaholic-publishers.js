(function() {
  var load_shareaholic = function() {
      SHR4P.jQuery.each(SHRSB_Settings, function(k) {
		    // we need this silly hack because if we set it to
		    // false in public.php, wordpress won't send it here
		    // and we need to override the default true value of
		    // expand
		    if (this['expand'] == 'false') {
		      this['expand'] = false;
		    }
		    SHR4P.jQuery('.'+k).shareaholic_publishers(this);
    });
  };

  var myinit = function(){
    if (/(loaded|complete)/.test(document.readyState)) {
      load_shareaholic();
    } else {
      SHR4P.jQuery(document).ready(function(){
        load_shareaholic();
      });
    }
  };

  if (typeof(SHR4P) == 'undefined') {
    SHR4P = {};
  }
  SHR4P.onready = myinit;
  //SHR4P.debug_enabled = true;
  SHR4P.src = SHRSB_Globals['src'];

  if (typeof(SHR4P.ready) == 'undefined' || !SHR4P.ready) {
    var head = document.getElementsByTagName('head')[0];
    if (typeof(head) != 'undefined') {
      var script = document.createElement('script');
      script.src = SHRSB_Globals['src']+'/media/js/jquery.shareaholic-publishers-api.min.js';
      script.type = "text/javascript";
      head.appendChild(script);
    }
  } else {
    myinit();
  }
})();
// vim: ts=2 sw=2

