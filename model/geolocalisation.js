function geolocalisation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        $("#geoloc").html("Geolocation is not supported by this browser.");
    }
}
function showPosition(position) 
{
	var latitude = position.coords.latitude;
	var longitude = position.coords.longitude;
    $("#geoloc").html(latitude + 
    ", " + longitude);
    var latlong = (latitude +","+ longitude);
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            $("#geoloc").html("User denied the request for Geolocation.");
            break;
        case error.POSITION_UNAVAILABLE:
            $("#geoloc").html("Location information is unavailable.");
            break;
        case error.TIMEOUT:
            $("#geoloc").html("The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
          	$("#geoloc").html("An unknown error occurred.")
            break;
    }
}