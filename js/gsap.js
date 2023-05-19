( function($) {
	$(document).ready(function() {

// GSAP Initial
		console.clear();
		gsap.registerPlugin(ScrollTrigger);


const isTouch = "ontouchstart" in document.documentElement;

var texts = gsap.utils.toArray(".sticky-content .text");
texts.forEach((text, i) => {
  ScrollTrigger.create({
    pin: text,
    start: "top 0%",
    trigger: jQuery(text).parent().parent(),
    endTrigger: jQuery(text).parent().parent(),
    end: "bottom 0%+=" + gsap.getProperty(text, "height"),
    //pinType: isTouch ? "fixed" : "transform",
    markers: true,
    refreshPriority: -1
  });
});



var images = gsap.utils.toArray(".sticky-content .zoomer .images");
images.forEach((image, i) => {
  gsap.fromTo(
    image,
    { scale: 0.5 },
    {
      scale: 1,
      ease: "none",
      force3D: true,
      //force3D: false,
			transformStyle:"preserve-3d",
			ease: Linear.easeNone,
      scrollTrigger: {
        pin:".sticky-content .zoomer",
        trigger: ".sticky-content .zoomer",
        start: "50% center",
        end: "100%",
        //pinType: isTouch ? "fixed" : "transform",
        scrub: true,
        markers: true
      }
    }
  );
});

//ScrollTrigger.sort();



});
} ) ( jQuery );