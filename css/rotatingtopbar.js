$(document).ready(function() {
	var angle = 0;
setInterval(function(){
      angle+=3;
     $(".topbar img").rotate(angle);
},50);
});

