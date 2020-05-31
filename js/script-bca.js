/* =========================================
                Preloader
============================================ */
$(window).on('load', function () { // makes sure that whole site is loaded
	$('#status').fadeOut();
	$('#preloader').delay(350).fadeOut('slow');
});

/* =========================================
                responsive tabs
============================================ */
$(function () {
	$("#services-tabs").responsiveTabs({
		animation: 'slide'
	});
});

/* =========================================
                Team
============================================ */
$(function () {
	$("#team-members").owlCarousel({
		items: 2,
		autoplay: true,
		smartSpeed: 700,
		loop: true,
		autoplayHoverPause: true,
		nav: true,
		dots: false,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		responsive: {
			// breakpoint from 0 up
			0: {
				items: 1
			},
			// breakpoint from 480 up
			480: {
				items: 2
			}
		}
	});
});

/* =========================================
              Google Map
============================================ */
$(window).on('load', function () {

	// Map Variables
	var addressString = '230 Broadway, NY, New York 10007, USA';
	var myLatlng = {
		lat: 40.712685,
		lng: -74.005920
	};

	// 1. Render Map
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 11,
		center: myLatlng
	});

	// 2. Add Marker
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: "Click To See Address"
	});

	// 3. Add Info Window
	var infowindow = new google.maps.InfoWindow({
		content: addressString
	});

	// Show info window when user clicks marker
	marker.addListener('click', function () {
		infowindow.open(map, marker);
	});

	// 4. Resize Function
	google.maps.event.addDomListener(window, 'resize', function () {

		var center = map.getCenter();
		google.maps.event.trigger(map, 'resize');
		map.setCenter(center);

	});

});
