jQuery(document).ready(function($) {
	$('nav').css('opacity', 0);

	//making nav title clickable
	$('#sanchayjaveria').click(function(){
		$('html, body').animate({
				scrollTop: $('.js__here-header').offset().top
			},
			800, function() {
			/* stuff to do after animation is complete */
		});
	});
	$('nav img').click(function(){
		$('html, body').animate({
				scrollTop: $('.js__here-header').offset().top
			},
			800, function() {
			/* stuff to do after animation is complete */
		});
	});

	$('.js__about-me').waypoint(function(direction){
		if(direction=="down") {
			$('nav').css('opacity', 1);
		} else {
			$('nav').css('opacity', 0);
		}
	}, {offset: '20%'});

	//smooth scroll
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

	// navigation current section effect
	$('.js__about-me').waypoint(function(direction){
		if(direction=="down"){
			$('nav .a2').removeClass('increase-a-weight');
			$('nav .a3').removeClass('increase-a-weight');
			$('nav .a4').removeClass('increase-a-weight');
			$('nav .a5').removeClass('increase-a-weight');
			$('nav .a6').removeClass('increase-a-weight');
			$('nav .a1').addClass('increase-a-weight');
		} else {
			$('nav .a1').removeClass('increase-a-weight');
		}
	}, {offset: '10%'});
	$('.js__skills').waypoint(function(direction){
		if(direction=="down"){
			$('nav .a3').removeClass('increase-a-weight');
			$('nav .a4').removeClass('increase-a-weight');
			$('nav .a5').removeClass('increase-a-weight');
			$('nav .a6').removeClass('increase-a-weight');
			$('nav .a1').removeClass('increase-a-weight');
			$('nav .a2').addClass('increase-a-weight');
		} else {
			$('nav .a2').removeClass('increase-a-weight');
			$('nav .a1').addClass('increase-a-weight');
		}
	}, {offset: '10%'});
	$('.js__projects').waypoint(function(direction){
		if(direction=="down"){
			$('nav .a4').removeClass('increase-a-weight');
			$('nav .a5').removeClass('increase-a-weight');
			$('nav .a6').removeClass('increase-a-weight');
			$('nav .a1').removeClass('increase-a-weight');
			$('nav .a2').removeClass('increase-a-weight');
			$('nav .a3').addClass('increase-a-weight');
		} else {
			$('nav .a2').addClass('increase-a-weight');
			$('nav .a3').removeClass('increase-a-weight');
		}
	}, {offset: '10%'});
	$('.js__education').waypoint(function(direction){
		if(direction=="down"){
			$('nav .a5').removeClass('increase-a-weight');
			$('nav .a6').removeClass('increase-a-weight');
			$('nav .a1').removeClass('increase-a-weight');
			$('nav .a2').removeClass('increase-a-weight');
			$('nav .a3').removeClass('increase-a-weight');
			$('nav .a4').addClass('increase-a-weight');
		} else {
			$('nav .a3').addClass('increase-a-weight');
			$('nav .a4').removeClass('increase-a-weight');
		}
	}, {offset: '10%'});
	$('.js__contact').waypoint(function(direction){
		if(direction=="down"){
			$('nav .a1').removeClass('increase-a-weight');
			$('nav .a2').removeClass('increase-a-weight');
			$('nav .a3').removeClass('increase-a-weight');
			$('nav .a4').removeClass('increase-a-weight');
			$('nav .a5').removeClass('increase-a-weight');
			$('nav .a6').addClass('increase-a-weight');
		} else {
			$('nav .a4').addClass('increase-a-weight');
			$('nav .a6').removeClass('increase-a-weight');
		}
	}, {offset: '10%'});


	// PROJECTS
	  $('.slider').glide({
	  	autoplay: false,
	    arrowRightText: '&rarr;',
	    arrowLeftText: '&larr;'
	  });

	// google maps

	var map = new GMaps({
	  div: '#map',
	  scrollwheel: false,
	  lat: 40.1146914,
	  lng: -88.0,
	  zoom: 12
	});

	map.addMarker({
	  lat: 40.1146914,
	  lng: -88.0,
	  title:'champaign',
	  infoWindow: {
	  	content: '<p>Come try us!</p>'
	  }
	});
});	
