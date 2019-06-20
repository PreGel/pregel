// was needed to close mobile when resizing, may not be neccessary anymore

jQuery(window).resize(function() {
    jQuery(".off-canvas-wrapper-inner").removeClass("is-open-right");
    jQuery(".off-canvas-wrapper-inner").removeClass("is-off-canvas-open");
    jQuery(".off-canvas").removeClass("is-open");
});

// this limits image checkboxes to only 2 on any pop kit order form
jQuery.noConflict();
  jQuery(document).ready(function($) {    

  $.fn.limit = function(n) {
  var self = this;
  this.click(function(){ return (self.filter(":checked").length<=n); });
  }
  $("body.single-popkit_type .img-choice ul.gfield_checkbox li input:checkbox").limit(2);          

  });