
/*element serolling effects 

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

*/

/* for the book */
$(document).ready(function(){
	$('.bookimg').fadeIn(3000);
	$(window).bind('scroll',function(e){
   		parallaxScroll();
   	});
 
   	function parallaxScroll(){
   		var scrolledY = $(window).scrollTop();
		$('.bookimg').css('margin-top' , ((scrolledY*0.25))+'px');
		$('.resumebtn').css('margin-top' , ((scrolledY*0.05))+'px');
		// $('.myimage').css('margin-top', ((scrolledY*0.06))+'px');
		 // hiding my picture 
		//  if((scrolledY*0.06) > 200){
		// 	$('.profilepic').fadeOut(2000);
		//  	$('.responsiveimg').fadeOut(2000);
		//  }
		// // bringing back 
		//  if((scrolledY*0.06) < 200){
		//  	$('.profilepic').fadeIn(3000);
		//  	$('.responsiveimg').fadeIn(3000);
		 // }
		// for responsiveimage
		// $('.responsiveimg').css('right', '-'+((scrolledY*3))+'px');
   	}

 
});


