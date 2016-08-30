jQuery(document).ready(function($) {
	$('nav').css('opacity', 0);




	/*Helper function to extract the URL between the last / and before ? 
	  If url is www.example.com/file.php?f_id=55 this function will return file.php 
	 pseudo code: edit to match your url settings  
	*/ 
	function refineUrl()
	{
	    //get full url
	    var url = window.location.href;
	    //get url after/  
	    var value = url.substring(url.lastIndexOf('/') + 1);
	    //get the part before ?
	    value  = value.split("/")[0];   
	    return value;     
	}

	var newUrl = refineUrl();//fetch new url

	//here you pass whatever you want to appear in the url after the domain /
	window.history.pushState("object or string", "Title", "/"+newUrl );



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
	  lat: 40.1131425,
	  lng: -88.2288502,
	  zoom: 16
	});

	map.addMarker({
	  lat: 40.1137661,
	  lng: -88.2323177,
	  title:'champaign',
	  infoWindow: {
	  	content: '602 E Stoughton St, Unit 12, Champaign, IL'
	  }
	});
});	
