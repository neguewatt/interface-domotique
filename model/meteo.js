

function getMeteo()
{
	$.ajax({
		url : "http://api.wunderground.com/api/3f0376e269a62937/geolookup/conditions/lang:FC/q/"+maLatitude+","+maLongitude+".json",
		dataType : "jsonp",
		success : function(parsed_json) {
			var location = parsed_json['location']['city'];
			var temp_c = parsed_json['current_observation']['temp_c'] + "°C";
			var uneimage = parsed_json['current_observation']['icon_url'];
			var untitle = parsed_json['current_observation']['icon'];
			var directionVent = parsed_json['current_observation']['wind_dir'];
			var vitesseVent= parsed_json['current_observation']['wind_kph']+ " km/h";
			var weather = parsed_json['current_observation']['weather'];
			var tempRessentie = parsed_json['current_observation']['feelslike_c'] + "°C";
			var visibilityKM = parsed_json['current_observation']['visibility_km'] + " km";								
			}
	});
}