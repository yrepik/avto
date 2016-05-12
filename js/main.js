// custom scripts
$(window).load(function () {
//$(document).ready(function() {
 
 
	$(".owl").owlCarousel({
	
		loop: true,
		margin: 35,
		nav : true,
		navText: false,
		//pagination : true,
		items: 3,
		responsiveClass:false,
		responsive: {
			0: {
				items: 1,
				nav: true,
				
			},
			600: {
				items: 2,
				nav: true
			},
			1000: {
				items: 3,
				nav: true,
				loop: true
			}
		}

	
	});

	
});

//$(document).ready(function() {
//	accordion_start();
//	$(".accordeon").hide().click(function() {
//		$(this).parents(".accordeon").find("dd").not(this).slideUp().prev().removeClass("active");
//		$(this).next().not(":visible").slideDown().prev().addClass("active");
//	});
//});

//$( window ).resize(function() {
 // accordion_start();
//});

//function accordion_start(){
//	var ww = $(window).width();
//	if(ww <= "1024"){
//		$('.catalog__item').each(function() {
//			$(this).addClass("accordeon");	
//		});		
//		
//	} else{
//		$('.catalog__item').removeClass("accordeon");
//	}
//};