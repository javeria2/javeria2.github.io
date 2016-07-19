// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
//  	//code...
// }
	
// Initialize fullPage

  $('#fullpage').fullpage({
     anchors: ['homepage', 'personal-details','technical-skills','personal-projects','experience','education','contact'],
     slidesNavigation: true,
     navigation: true,
     navigationTooltips: ['Home', 'Personal Details', 'Technical skills' , 'Personal projects' , 'Experience', 'Education' , 'Contact'],
     controlArrows: false,
     sliding: true,
      afterLoad: function(anchorLink, index) {
        if (index == 1) {
            $('#fp-nav').css({"top":"-100%","transition":"all 1s"});
        }
       	else if(index == 4){
			$('.fp-slidesNav').css({"transition":"all 0.3s","left":"50%"});
		}
      },
      onLeave: function(index, nextIndex, direction){
        if(index == 1) {
          $('#fp-nav').css({"top":"50%","transition":"all 1s"});
          $('.fp-slidesNav').css({"transition":"all 1s", "left":"-100%"});
        } else if(index == 4) {
        	$('.fp-slidesNav').css({"transition":"all 0.3s", "left":"-100%"});
        }
    }
  });

// var get_ = document.querySelectorAll("#fp-nav ul li a.active span", 
// 	".fp-slidesNav ul li a.active span", 
// 	"#fp-nav ul li:hover a.active span", 
// 	".fp-slidesNav ul li:hover a.active span");
// console.log(get_);
// get_[0].onmouseover = function(){
// 	document.body.backgroundColor = 'black !important';
// 	console.log("hi");
// }