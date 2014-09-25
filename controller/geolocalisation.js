function supported(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(laPosition, showError);
    }
    else{
    	$('#geoloc > #erreur').html("Votre navigateur ne supporte pas la géolocalisation");
    }
}

function laPosition(position){
	$('#latitude').val(position.coords.latitude);
	$('#longitude').val(position.coords.longitude);
}


function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            $('#geoloc > #erreur').html("User denied the request for Geolocation.");
            break;
        case error.POSITION_UNAVAILABLE:
            $('#geoloc > #erreur').html("Location information is unavailable.");
            break;
        case error.TIMEOUT:
            $('#geoloc > #erreur').html("The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
            $('#geoloc > #erreur').html("An unknown error occurred.");
            break;
    }
}