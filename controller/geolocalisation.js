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
    var messageErreur = "<div id = 'erreur'>User denied the request for Geolocation.</div>";
    switch(error.code) {
        case error.PERMISSION_DENIED:
            $('#meteo').html(messageErreur);
            break;
        case error.POSITION_UNAVAILABLE:
            $('#meteo').html(messageErreur);
            break;
        case error.TIMEOUT:
            $('#meteo').html(messageErreur);
            break;
        case error.UNKNOWN_ERROR:
            $('#meteo').html(messageErreur);
            break;
    }
}