
/*element serolling effects */

$(document).ready(function(){
	$('.profilepic').fadeIn(3000);
	$('.responsiveimg').fadeIn(3000);
	$(window).bind('scroll',function(e){
   		parallaxScroll();
   	});
 
   	function parallaxScroll(){
   		var scrolledY = $(window).scrollTop();
		$('.profilepic').css('left','-'+((scrolledY*3))+'px');
		 // hiding my picture 
		if((scrolledY*3) > 200){
			$('.profilepic').fadeOut(2000);
			$('.responsiveimg').fadeOut(2000);
		}
		// bringing back 
		if((scrolledY*3) < 200){
			$('.profilepic').fadeIn(3000);
			$('.responsiveimg').fadeIn(3000);
		}
		// for responsiveimage
		$('.responsiveimg').css('right', '-'+((scrolledY*3))+'px');
   	}

 
});

/*page scrolling effect for paages */
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 1000, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});