function supported(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(laPosition, showError);
    }
    else{
    	$('#meteo').html("<div id = 'erreur'>Votre navigateur ne supporte pas la géolocalisation.</div>");
    }
}

function laPosition(position){
	$('#geoloc > #latitude').val(position.coords.latitude);
	$('#geoloc > #longitude').val(position.coords.longitude);
}


function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            $('#meteo').html("<div id = 'erreur'>Erreur de géolocalisation.</div>");
            break;
        case error.POSITION_UNAVAILABLE:
            $('#meteo').html("<div id = 'erreur'>Erreur de géolocalisation..</div>");
            break;
        case error.TIMEOUT:
            $('#meteo').html("<div id = 'erreur'>Erreur de géolocalisation..</div>");
            break;
        case error.UNKNOWN_ERROR:
            $('#meteo').html("<div id = 'erreur'>Erreur de géolocalisation..</div>");
            break;
    }
}