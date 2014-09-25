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

include("../controller/date.js", divDate);

function divDate(){
	var tabDate = avoirDate();
	$("#date").html(tabDate.leJourSemaine + " " + tabDate.leJour + "/" + tabDate.leMois + "/" + tabDate.lAnnee + ", " + tabDate.lHeure + ":" + tabDate.laMinute);
}

setInterval(function(){divDate()}, 1000);