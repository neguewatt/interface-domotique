var getGeolocExist = function(){
	if($('#geoloc > #latitude').val() != '' && $('#geoloc > #longitude').val() != ''){
		return true;
	}
	else{
		return false;
	}
}

setInterval(function(){
	if(getGeolocExist()){
		var latitude = $('#geoloc > #latitude').val();
		var longitude = $('#geoloc > #longitude').val();
		var laMeteo = new meteo();

		laMeteo.getMeteo(latitude, longitude);
	}

}, 3000);