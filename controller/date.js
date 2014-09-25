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

	//Tableau jour semaines
	var tabJour = {"1" : "Lundi", "2" : "Mardi", "3" : "Mercredi", "4" : "Jeudi", "5" : "Vendredi", "6" : "Samedi", "7" : "Dimanche"};

	//Tableau mois
	var tabMois = {"1" : "Jan.", "2" : "Fev.", "3" : "Mars", "4" : "Avr.", "5" : "Mai", "6" : "Juin", "7" : "Juil.", "8" : "Aôut", "9" : "Sept.", "10" : "Oct.", "11" : "Nov.", "12" : "Dec."};

	var jourSemaine = tabJour[jourS];
	var mois = tabMois[mois];

	return { lHeure : heures, laMinute : minutes, leJour : jour, leMois : mois, lAnnee : annee, leJourSemaine : jourSemaine };
}