( function($) {

	$(document).ready(function() {

		//Passive reduce - remove for CWV
		jQuery.event.special.touchstart = {
			setup: function( _, ns, handle ) {
				this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
			}
		};
		jQuery.event.special.touchmove = {
			setup: function( _, ns, handle ) {
				this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
			}
		};
		jQuery.event.special.wheel = {
			setup: function( _, ns, handle ){
				this.addEventListener("wheel", handle, { passive: true });
			}
		};
		jQuery.event.special.mousewheel = {
			setup: function( _, ns, handle ){
				this.addEventListener("mousewheel", handle, { passive: true });
			}
		};

		// Dark Mode switch
		$('#btnSwitch').click(function() {
			if ($('html').attr('data-bs-theme') == 'dark') {
				$('html').attr('data-bs-theme', 'light');
			} else {
				$('html').attr('data-bs-theme', 'dark');
			}
		});

		//ADAPTIVE
		$(window).on('resize',function(){
			let windowW = $(window).width(), windowH = $(window).height();
				if (windowW > 992) {
				  $('.show-900').remove();
				} else {
				  $('.hide-900').remove();
				}
		});

		// AOS
		AOS.init({ easing: 'ease-in-out-sine',  startEvent: 'load', disable: 'mobile'});

		// Fades in page on load
		$('body').css('display', 'none');
		$('body').fadeIn(500);

		// hide #anchor from url
		$('a[href*="#"]:not([href="#"])').click(function () {
		    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		        var target = $(this.hash);
		        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		        if (target.length) {
		            $('html, body').animate({
		                scrollTop: target.offset().top
		            }, 1000);
		            return false;
		        }
		    }
		});

		// Refresh slides on acodorins
		$('.accordion-button').click(function(e){
		  e.preventDefault();
		  $(".side-image").slick('refresh');
		})

		// Mobile Menu
		$('#trigger').click(function(e){
			e.preventDefault();
			$('#slide-div').toggleClass('active');
			$('.mobile-overflow').toggleClass('active');
			$('body').toggleClass('active');
			$('.menu-nav').toggleClass('active');
		})
		$('#trigger-close').click(function(e){
			e.preventDefault();
			$('#slide-div').toggleClass('active');
			$('.mobile-overflow').toggleClass('active');
			$('body').toggleClass('active');
			$('.menu-nav').toggleClass('active');
		})

		// Mobile Sub menu
		$(".menu-item-has-children" ).hover(
		  function() {
		    $("#menu-main-menu li").addClass( "fademe-menu" );
		    $(".menu-links").addClass( "fademe-menu-links" );
		    $( this ).addClass( "hover" );
		  }, function() {
		    $("#menu-main-menu li").removeClass( "fademe-menu" );
		    $( this ).removeClass( "hover" )
		    $(".menu-links").removeClass( "fademe-menu-links" );
		  }
		);

		// Mobile sub nav
		$(".mobile-navigation .sub-menu").hide();
			//$(".current_page_item .sub-menu").show();
			$(".mobile-navigation li.menu-item").click(function () { // mouse CLICK instead of hover
				// Only prevent the click on the topmost buttons
				if ($('.mobile-navigation .sub-menu', this).length >=1) {
				event.preventDefault();
			}
			//$(".mobile-navigation .sub-menu").hide("fast", "linear");
			$(".mobile-navigation li.menu-item").removeClass("redlinked"); // First hide any open menu items
			$(this).find(".sub-menu").slideToggle("fast", "swing"); // display child
			$(this).addClass("redlinked");
			event.stopPropagation();
		});

		// Slick Slider
		$('.slider-for').slick({
		 slidesToShow: 1,
		 slidesToScroll: 1,
		 arrows: true,
		 fade: true,
		 infinite: true,
		speed: 300,
		 asNavFor: '.home-news-slider',
		 responsive: [
		   {
		     breakpoint: 600,
		     settings: {
		       arrows: false,
		     }
		   }
		 ]
		});

		// Add smooth scrolling to all links
	  $("a.smooth").on('click', function(event) {

	    // Make sure this.hash has a value before overriding default behavior
	    if (this.hash !== "") {
	      // Prevent default anchor click behavior
	      event.preventDefault();

	      // Store hash
	      var hash = this.hash;

	      // Using jQuery's animate() method to add smooth page scroll
	      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	      $('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 800, function(){

	        // Add hash (#) to URL when done scrolling (default click behavior)
	        window.location.hash = hash;
	      });
	    } // End if
	  });


});
} ) ( jQuery );
