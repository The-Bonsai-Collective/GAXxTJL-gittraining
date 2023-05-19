( function($) {
	$(document).ready(function() {

// GSAP Initial
		console.clear();
		gsap.registerPlugin(ScrollTrigger);


// --- ORANGE PANEL ---

gsap.to('img', {
  scale: 1.5,
  duration: 1,
  scrollTrigger: {
    trigger: 'img',
    markers: true,
    start: 'bottom bottom'
  }
})



});
} ) ( jQuery );