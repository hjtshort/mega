(function($) {
  $(function() {
    if(!$('body').hasClass("rtl")) {
      $('.container-scroller').perfectScrollbar( {suppressScrollX: true});
      $('.list-wrapper,ul.chats,.product-chart-wrapper').perfectScrollbar();
        if(!$('body').hasClass("horizontal-menu")) {
            $('#sidebar .nav').perfectScrollbar();
        }
      }
  });
})(jQuery);
