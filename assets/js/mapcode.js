// function initialize() {
//  "use strict";
//   var mapOptions = {
// 	zoom: 15,
// 	scrollwheel: false,
// 	center: new google.maps.LatLng(-3.9837041,-38.3426237)
//   };

//   var map = new google.maps.Map(document.getElementById('googleMap'),
// 	  mapOptions);


//   var marker = new google.maps.Marker({
// 	position: map.getCenter(),
// 	animation:google.maps.Animation.BOUNCE,
// 	icon: 'img/logo/map-marker.png',
// 	map: map
//   });

// }

// google.maps.event.addDomListener(window, 'load', initialize);

//  MAPS LUCAS //
if(jQuery('#gmap_canvas7').length){
	function init_map7() {
		var myOptions = {
			zoom: 15,
			center: new google.maps.LatLng(-3.9837041, -38.3426237),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
		};
		// ADICINA O LATITUDE E LONGITUDE DO MARKER NO MAPA
		map7 = new google.maps.Map(document.getElementById('gmap_canvas7'), myOptions);
		marker7 = new google.maps.Marker({
			map: map7,
			position: new google.maps.LatLng(-3.9837041, -38.3426237),
			optimized: false,
			icon: new google.maps.MarkerImage('img/marker.png')
		});

		marker7.setDraggable(true);		
		// INFORMACAO AO CLICAR NO MAPA

		infowindow7 = new google.maps.InfoWindow({
			content: '<strong>Celebration Ville</strong><br>Rodovia CE 040 Km 36, s/nº, Aquiraz - CE, 61700-970'
		});

		google.maps.event.addListener(marker7, 'click', function() {
			infowindow7.open(map7, marker7);
		});
	}
	google.maps.event.addDomListener(window, 'load', init_map7);
}			