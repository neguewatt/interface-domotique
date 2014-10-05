setTimeout(function(){
	var latitude = $('#geoloc > #latitude').val();
	var longitude = $('#geoloc > #longitude').val();
	var laMeteo = new meteo();

	laMeteo.getMeteo(latitude, longitude);

}, 2000);