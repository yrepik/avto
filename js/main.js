// custom scripts
$(window).load(function () {
//$(document).ready(function() {
 
 
	$(".owl").owlCarousel({
	
		loop: true,
		margin: 35,
		nav : true,
		navText: ["prev", "next"],
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
				nav: false
			},
			1000: {
				items: 3,
				nav: true,
				loop: false
			}
		}

	
	});
	
});