	/* google map 3 */
	if(jQuery('#map3').length){
		function myMap3() {
			  var mapCanvas = document.getElementById("map3");
			  var mapOptions = {
				center: new google.maps.LatLng(45.434046,12.340284),
				zoom:11,
				mapTypeId:google.maps.MapTypeId.TERRAIN,
				styles:[{"featureType":"all","elementType":"all","stylers":[{"saturation":"32"},{"lightness":"-3"},{"visibility":"on"},{"weight":"1.18"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"saturation":"-70"},{"lightness":"14"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"saturation":"100"},{"lightness":"-14"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":"12"}]}]
			  };
			  var map = new google.maps.Map(mapCanvas,mapOptions);
			}
		google.maps.event.addDomListener(window, 'load', myMap3);
		
	}
