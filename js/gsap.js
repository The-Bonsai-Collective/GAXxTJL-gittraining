( function($) {
	$(document).ready(function() {

// GSAP Initial
console.clear();
gsap.registerPlugin(ScrollTrigger);


gsap.to(".text-block h2", {
  scrollTrigger: {
    trigger: ".pin-this",
    markers: true,
    start: "top bottom",
    end: "bottom -300%",
    pin: ".text-block h2",
    scrub: 2,
  },
});
gsap.to(".image-block img", {
  scale: 1.5,
  ease: "power2",
  force3D: true,
  scrollTrigger: {
    scale: 2,
    trigger: ".pin-this",
    markers: true,
    start: "top bottom",
    end: "bottom -300%",
    pin: ".image-block",
    scrub: 2,
  },
});



});
} ) ( jQuery );