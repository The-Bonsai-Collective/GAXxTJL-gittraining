( function($) {
	$(document).ready(function() {

// GSAP Initial
		console.clear();
		gsap.registerPlugin(ScrollTrigger);


// --- ORANGE PANEL ---

const tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".orangeWrapper",
    scrub: true,
    pin: true,
    
    start: "50% 50%",
    end: "+=200%"
  }
})

.from(".orange", {
  scale: 0.5, 
  ease: "none"
})

.from(".line-2", {
  scaleX:0,
  ease:"none",
  transformOrigin:"left top"
}, 0)




});
} ) ( jQuery );