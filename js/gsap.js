( function($) {
	$(document).ready(function() {

// GSAP Initial
		console.clear();
		gsap.registerPlugin(ScrollTrigger);


let container = document.querySelector(".pin-container");

gsap.set(".section-2", {
  yPercent: 100
});

gsap.set(".image-frame-1", {
  xPercent: 100
})

gsap.set(".image-frame-2", {
  xPercent: -100
})

let tl = gsap.timeline({
  defaults: { ease: "none" },
  scrollTrigger: {
    trigger: container,
    pin: true,
    start: "top top",
    end: () => "+=" + container.clientHeight * 6,
    scrub: 1,
    invalidatOnRefresh: true
  }
});

tl.to(".image-frame-1", {
  xPercent: 0
})
.set({}, {}, "+=1")
.to(".section-2", {
  yPercent: 0
})
.to(".image-frame", {
  xPercent: "+=100"
}, "-=50%")
.set({}, {}, "+=1") // extend tl duration




const isTouch = "ontouchstart" in document.documentElement;

var texts = gsap.utils.toArray(".sticky-content .text");
texts.forEach((text, i) => {
  ScrollTrigger.create({
    pin: text,
    start: "top 40%",
    trigger: jQuery(text).parent().parent(),
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
    { scale: 0 },
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



});
} ) ( jQuery );