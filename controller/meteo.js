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

//inclure model/meteo
include("../model/meteo.js", getMeteo);

function getMeteo(){

}