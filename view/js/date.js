function divDate(){
	var tabDate = avoirDate();
	$("#date").html(tabDate.leJourSemaine + " " + tabDate.leJour + " " + tabDate.leMois + " " + tabDate.lAnnee);
	$("#heure").html(tabDate.lHeure + ":" + tabDate.laMinute);
}

divDate();
setInterval(function(){divDate()}, 1000);