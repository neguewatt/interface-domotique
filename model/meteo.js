function meteo(){

	private	ville, //location
			temperature, //temp_c
			image,
			uneDescription, //weather
			altImage, //unTitle
			directionVent,
			vitesseVent,
			tempRessentie,
			visibilite;

	function getMeteo(p_latitue, p_longitude)
	{
		$.ajax({
			url : "http://api.wunderground.com/api/3f0376e269a62937/geolookup/conditions/lang:FC/q/"+p_latitue+","+p_longitude+".json",
			dataType : "jsonp",
			success : function(parsed_json) {
				this.ville = parsed_json['location']['city'];
				this.temperature = parsed_json['current_observation']['temp_c'] + "°C";
				this.image = parsed_json['current_observation']['icon_url'];
				this.altImage = parsed_json['current_observation']['icon'];
				this.directionVent = parsed_json['current_observation']['wind_dir'];
				this.vitesseVent= parsed_json['current_observation']['wind_kph']+ " km/h";
				this.uneDescription = parsed_json['current_observation']['weather'];
				this.tempRessentie = parsed_json['current_observation']['feelslike_c'] + "°C";
				this.visibilite = parsed_json['current_observation']['visibility_km'] + " km";								
				}
		});
	}

}