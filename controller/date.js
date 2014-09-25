function avoirDate(){
	var date = new Date();
	var heures = date.getHours();
	var minutes = date.getMinutes();
	var jour = date.getDate();
	var mois = date.getMonth() + 1;
	var annee = date.getFullYear();
	var jourS = date.getDay();

	if(minutes < 10){
		minutes = "0"+minutes;
	}
	if(mois < 10){
		mois = "0" + mois;
	}

	//Tableau jour semaines
	var tabJour = {"1" : "Lundi", "2" : "Mardi", "3" : "Mercredi", "4" : "Jeudi", "5" : "Vendredi", "6" : "Samedi", "7" : "Dimanche"};
	var jourSemaine = tabJour[jourS];

	return { lHeure : heures, laMinute : minutes, leJour : jour, leMois : mois, lAnnee : annee, leJourSemaine : jourSemaine };
}