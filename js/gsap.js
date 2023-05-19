( function($) {
	$(document).ready(function() {

// GSAP Initial
		console.clear();
		gsap.registerPlugin(ScrollTrigger);




gsap.to(".text-block .content", {
  scrollTrigger: {
    trigger: ".pin-this",
    markers: true,
    start: "top top",
    end: "+=400",
    pin: ".text-block",
    scrub: 2,
  },
});
gsap.to(".image-block img", {
  scale: 1.5,
  ease: "none",
  force3D: true,
  scrollTrigger: {
    scale: 2,
    trigger: ".pin-this",
    markers: true,
    start: "top top",
    end: "+=400",
    pin: ".image-block",
    scrub: 2,
  },
});



});
} ) ( jQuery );