( function($) {
	$(document).ready(function() {

// GSAP Initial
		console.clear();
		gsap.registerPlugin(ScrollTrigger);


var texts = gsap.utils.toArray(".sticky-content .text");
texts.forEach((text, i) => {
  ScrollTrigger.create({
    pin: text,
    start: "top 40%",
    trigger: ".sticky-content",
    endTrigger: jQuery(text).parent().parent(),
    end: "bottom 40%+=" + gsap.getProperty(text, "height"),
    //pinType: isTouch ? "fixed" : "transform",
    markers: true,
    refreshPriority: -1
  });
});

var images = gsap.utils.toArray(".zoomer .images");
images.forEach((image, i) => {
  gsap.fromTo(
    image,
    { scale: 0.5 },
    {
      scale: 1,
      ease: "none",
      force3D: true,
      scrollTrigger: {
        pin: images,
        trigger: ".sticky-content",
        start: "top top",
        end: "bottom top",
        //pinType: isTouch ? "fixed" : "transform",
        scrub: 0.5,
        markers: true
      }
    }
  );
});




});
} ) ( jQuery );