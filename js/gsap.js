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



});
} ) ( jQuery );