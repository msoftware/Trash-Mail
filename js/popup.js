$().ready(function() {
  $('#dialog').jqm({
	ajax: '@href',
	modal: true,
	onHide: function(h) { 
	      h.o.remove(); 
	      h.w.fadeOut(888);
	},
	onShow: function(h) {
              h.o.show();
              h.w.fadeIn(888);
        }
  });
});

