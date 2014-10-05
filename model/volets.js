function volets(p_etat, p_image, p_pourcentageOuverture)
{
	this.etat = p_etat; //True = ouvert, False = fermé
	this.image = p_image;
	this.pourcentageOuverture = p_pourcentageOuverture;

	//En dessous de 15% d'ouverture, considéré comme fermé

	this.ouvertureComplete = function(){
		this.pourcentageOuverture = 100;
		this.etat = true;

	}

	this.fermetureComplete = function(){
		this.pourcentageOuverture = 0;
		this.etat = false;
	}

	this.ouverturePartielle = function(p_pourcentage){
		this.pourcentageOuverture = p_pourcentage;
		if(this.pourcentageOuverture > 15){
			this.etat = true;
		}
		else{
			this.etat = false;
		}
	}

	this.getImage = function(){
		//Faire condition 	si etat est ouvert -> telle photo
							//sinon -> telle photo
	}
}