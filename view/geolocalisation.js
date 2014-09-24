function include(url, callback){

	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = url ;

	if (callback) {
		script.onload = function(){
			callback();
		}
	}
	document.getElementsByTagName("head")[0].appendChild(script);
}

include("../model/geolocalisation.js", geoloc);
function geoloc()
{
	if (!geolocalisation())
	{
		$("#geoloc").html("vous ne pouvez pas être localisé.");
	}
	else
	{
		var tabposition = geolocaisation();
		$("#geoloc").html(tabposition["latitude"] + " " + tabposition["longitude"]);
	}
}
