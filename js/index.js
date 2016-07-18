// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
//  	//code...
// }

// Initialize fullPage
$(document).ready(function() {
  $('#fullpage').fullpage({
     anchors: ['homepage', 'personal-details','experience','education','personal-projects','technical-skills','contact'],
     slidesNavigation: true,
     navigation: true,
     navigationTooltips: ['Home', 'Personal Details', 'Experience' , 'Education', 'Personal projects', 'Technical skills', 'Contact'],
     controlArrows: false,
      afterLoad: function(anchorLink, index) {
        if (index == 1) {
            $('#fp-nav').css({"top":"-100%","transition":"all 1s"});
        }
       	if(index == 5){
			$('.fp-slidesNav').css({"transition":"all 0.3s","left":"50%"});
		}
      },
      onLeave: function(index, nextIndex, direction){
        if(index == 1) {
          $('#fp-nav').css({"top":"50%","transition":"all 1s"});
          $('.fp-slidesNav').css({"transition":"all 1s", "left":"-100%"});
        } else if(index == 5) {
        	$('.fp-slidesNav').css({"transition":"all 1s", "left":"-100%"});
        }
    }
  });
});