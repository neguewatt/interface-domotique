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
	if(minutes < 10){
		minutes = "0"+minutes;
	}
	if(mois < 10){
		mois = "0" + mois;
	}

	var tabJour = {"1" : "Lundi", "2" : "Mardi", "3" : "Mercredi", "4" : "Jeudi", "5" : "Vendredi", "6" : "Samedi", "7" : "Dimanche"};

	$("#date").html(heures + " : " + minutes);
	$("#date").append( " " + tabJour[jourS] + " " + jour + "/" + mois + "/" + annee);
}