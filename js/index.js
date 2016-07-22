	
// Initialize fullPage
  $('#fullpage').fullpage({
     anchors: ['homepage', 'personal-details','technical-skills','personal-projects','experience','education','contact'],
     slidesNavigation: true,
     navigation: true,
     navigationTooltips: ['Home', 'Personal Details', 'Technical skills' , 'Personal projects' , 'Experience', 'Education' , 'Contact'],
     controlArrows: false,
     sliding: true,
     responsiveWidth: 1100,
      afterLoad: function(anchorLink, index) {
        if (index == 1) {
            $('#fp-nav').css({"top":"-100%","transition":"all 1s"});
        }
        if (index == 2) {
          console.log("hi!!");
          $('.box2').fadeIn(600);
        }
       	else if(index == 4){
			$('.fp-slidesNav').css({"transition":"all 0.3s","left":"50%"});
		}
      },
      onLeave: function(index, nextIndex, direction){
        $('.box2').fadeOut(500);
        if(index == 1) {
          $('#fp-nav').css({"top":"50%","transition":"all 1s"});
          $('.fp-slidesNav').css({"transition":"all 1s", "left":"-100%"});
        } else if(index == 4) {
        	$('.fp-slidesNav').css({"transition":"all 0.3s", "left":"-100%"});
        }
    }
  });

