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
      scrollTrigger: {
        pin:jQuery(image).parent(),
        trigger: jQuery(image).parent(),
        start: "top top",
        end: "bottom top",
        //pinType: isTouch ? "fixed" : "transform",
        scrub: 0.5,
        markers: true
      }
    }
  );
});

//ScrollTrigger.sort();




var largeTL = gsap.timeline({
  scrollTrigger: { 
    trigger: '.start-trig',
    pin: '.bg', 
    pinSpacing: false,
    start: "top top",
    markers: true,
    end: '+=200%',
  },
})


});
} ) ( jQuery );