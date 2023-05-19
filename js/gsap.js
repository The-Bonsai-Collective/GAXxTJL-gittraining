( function($) {
	$(document).ready(function() {

// GSAP Initial
		console.clear();
		gsap.registerPlugin(ScrollTrigger);


// --- ORANGE PANEL ---

$(".section").each(function() {
    var $image = $(this).find(".image");

    $(this).on("scroll", function() {
      var sectionTop = $(this).offset().top;
      var sectionBottom = sectionTop + $(this).outerHeight();
      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();

      if (sectionTop <= viewportBottom && sectionBottom >= viewportTop) {
        var imageWidth = $image.width();
        var imageHeight = $image.height();
        var sectionHeight = $(this).height();
        var imageRatio = imageWidth / imageHeight;
        var sectionRatio = $(window).width() / sectionHeight;

        if (imageRatio < sectionRatio) {
          $image.css("width", "100%");
        } else {
          $image.css("width", "auto");
        }
      }
    });
  });



});
} ) ( jQuery );