(function($) {
  $("#lightgallery").lightGallery();

  $("#lightgallery-without-thumb").lightGallery({
    thumbnail:true,
    animateThumb: false,
    showThumbByDefault: false
  });

  $("#video-gallery").lightGallery();
})(jQuery);
