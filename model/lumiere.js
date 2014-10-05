function lumiere(p_etat){
	this.etat = p_etat;

	this.allumer = function(){
		return this.etat = true;
	}

	this.eteindre = function(){
		return this.etat = false;
	}

	this.getEtat = function(){
		return this.etat;
	}
}
