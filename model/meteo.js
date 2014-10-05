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
				$("#meteo").html(parsed_json['location']['city']);
				$("#meteo").append(parsed_json['current_observation']['temp_c'] + "°C");
				$("#meteo").append(parsed_json['current_observation']['icon_url']);
				$("#meteo").append(parsed_json['current_observation']['icon']);
				$("#meteo").append(parsed_json['current_observation']['wind_dir']);
				$("#meteo").append(parsed_json['current_observation']['wind_kph']+ " km/h");
				$("#meteo").append(parsed_json['current_observation']['weather']);
				$("#meteo").append(parsed_json['current_observation']['feelslike_c'] + "°C");
				$("#meteo").append(parsed_json['current_observation']['visibility_km'] + " km");								
			}
		});
	}

	this.setVille = function(p_ville){
		return this.ville = p_ville;
	}

	this.getVille = function(){
		return this.ville;
	}
}



