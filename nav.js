$(document).ready(function(){
		$(window).scroll(function(){
			if ($(window).scrollTop() >= 100){
				
				$(".navigation").css("display", "inline-block");
				
			//console.log( $(this).scrollTop() );
			}
			else if ($(window).scrollTop() < 100){
				$(".navigation").css("display", "none");
			}
		});

}); //end jquery