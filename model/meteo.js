function meteo(p_ville, p_temperature, p_image, p_description, p_altImage, p_directionVent, p_vitesseVent, p_tempRessentie, p_visibilite){

	this.ville = p_ville; //location
	this.temperature = p_temperature;  //temp_c
	this.image = p_image;
	this.uneDescription = p_description; //weather
	this.altImage = p_altImage; //unTitle
	this.directionVent = p_directionVent;
	this.vitesseVent = p_vitesseVent;
	this.tempRessentie = p_tempRessentie;
	this.visibilite = p_visibilite;

	this.getMeteo = function(p_latitue, p_longitude){
		$.ajax({
			url : "http://api.wunderground.com/api/3f0376e269a62937/geolookup/conditions/lang:FC/q/"+p_latitue+","+p_longitude+".json",
			dataType : "jsonp",
			success : function(parsed_json) {
				$("#meteo").html("<div id = 'ville'>"+parsed_json['location']['city']+"</div>");
				$("#meteo").append("<div id = 'temperature'>"+parsed_json['current_observation']['temp_c'] + "°C</div>");
				$("#meteo").append("<div id = 'image'><img src = '" + parsed_json['current_observation']['icon_url'] + "' alt = '"+ parsed_json['current_observation']['icon'] +"' ></div>");
				$("#meteo").append("<div id = 'description'>"+parsed_json['current_observation']['weather']+"</div>");
				$("#meteo").append("<div id = 'dir_vent'>"+parsed_json['current_observation']['wind_dir']+"</div>");
				$("#meteo").append("<div id = 'vitesse_vent'>"+parsed_json['current_observation']['wind_kph']+ " km/h</div>");
				$("#meteo").append("<div id = 'tempRessentie'>"+parsed_json['current_observation']['feelslike_c'] + "°C</div>");								
			}
		});
	}
}



