function getMeteo(){
	var latitude = $('#geoloc > #latitude').val();
	var longitude = $('#geoloc > #longitude').val();
	var laMeteo = new meteo(0,0,0,0,0,0,0,0,0);
	laMeteo.getMeteo(latitude, longitude);
	return laMeteo;
}