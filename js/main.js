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

$(document).ready(function () {
    //header form
    $(document).on('click', '.js_headerAuto', function () {
        var name = $('.form_line__name').val(),
            phone = $('.form_line__phone').val(),
            email = $('.form_line__email').val(),
            detail = $('.form_line__detail').val();

        $.ajax({
            url: myajax.url,
            type: "POST",
            data: "action=header&name=" + name + "&phone=" + phone + "&email=" + email + "&detail=" + detail,
            success: function (data) {
                $('.form_line__name').val('');
                $('.form_line__phone').val('');
                $('.form_line__email').val('');
                $('.form_line__detail').val('');
            }
        });
        return false;
    });

    $(document).on('click', '.js_findCar', function () {
        var name = $('.find_car__name').val(),
            phone = $('.find_car__phone').val();

        $.ajax({
            url: myajax.url,
            type: "POST",
            data: "action=find&name=" + name + "&phone=" + phone,
            success: function (data) {
                $('.find_car__name').val('');
                $('.find_car__phone').val('');
            }
        });
        return false;
    });

    $(document).on('click', '.js_saleForm', function () {
        var name = $('.sale__name').val(),
            phone = $('.sale__phone').val(),
            email = $('.sale__email').val();

        $.ajax({
            url: myajax.url,
            type: "POST",
            data: "action=sale&name=" + name + "&phone=" + phone + "&email=" + email,
            success: function (data) {
                $('.sale__name').val('');
                $('.sale__phone').val('');
                $('.sale__email').val('');
            }
        });
        return false;
    });

    var modal = $('.myModal');
    var btn = $('.myBtn');
    var span = $('.close')[0];
    //console.log(modal);

// When the user clicks on the button, open the modal 
   $('.myBtn').click(function() {
        modal.show();
});

// When the user clicks on <span> (x), close the modal
    $('.close').click(function() {
        modal.hide();
});

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
     if (event.target == modal) {
           modal.hide();
    }
}
});