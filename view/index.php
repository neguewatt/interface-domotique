<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Accueil interface de domotique</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="themes/domotique.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
	</head>

	<body>
		<div data-role="page" data-theme="a" id="imageecran">
			<div data-role="header" data-position="fixed">
				<h1><img src="images/home.png" alt="home" class="imageheader">HOME</h1>
			</div>



			<div id="carregauche">
				<h1 class= "centreheure" id = 'heure'></h1>
				<p class= "centredate" id = 'date'></p>
				<div id = 'geoloc'>
					<input type = 'hidden' id = 'latitude'></input>
					<input type = 'hidden' id = 'longitude'></input>			
				</div>
				<div class= "centremeteo" id = 'meteo'>Chargement de la météo ...</div>
			</div>


		<!--	Inclusion du javascript	-->
		<script type="text/javascript" src = "../model/externe/jquery.js" ></script>
		<?php 
			include('../model/script.php');
			include('../controller/script.php');
			include('script.php');
		?>

		


		<!--     	MODULE DE L'ALARME		 -->

			<div id="carrecentral">
				<div>
					<p style="text-align: center">MODULE ALARME</p>
					<a href="#popupDialog" data-rel="popup" data-position-to="window"  data-inline="false" data-transition="fade" data-theme="a">
						<img class="popphoto" id="boutonserrure" type="image" src="images/serrure.png" > <a/>
					<div data-role="popup" id="popupDialog" data-overlay-theme="a" data-theme="c" data-dismissible="false" style="max-width:400px;" class="ui-corner-all">
					    <div data-role="header" data-theme="a" class="ui-corner-top">
					        <h1>Gestion de l'alarme</h1>
					    </div>
					    <div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
					        <h3 class="ui-title">Etes-vous sûr de vouloir activer l'alarme?</h3>
					        <p>Cette action ne peut pas être annulée.</p>
					        <a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="c">Désactiver</a> 
					        <a href="#" data-role="button" data-inline="true" data-rel="back" data-transition="flow" data-theme="b">Activer</a>
					    </div>
					</div>
				</div>
				<div>
					<p style="text-align: center"> MODULE CONSOMATION ENERGIE </p>
				</div>

			</div>


		<!--     	MODULE DE LA GESTION DES VOLETS		 -->

		<div id="carrebasgauche">
			<div>
				<a href="volets.html" data-inline="false" data-transition="pop">
				<img src="images/fenetre.png" classe="button"><p  class="textboutonhaut">Gestion des volets</p>
				</a>
			</div>



			<div class="bascarrevolets">
				<div id="formeboutongauche">
					<a href="#"  data-role="button" id="boutonstandar" data-iconpos="left" data-inline="true" >
						<img src="images/volets-ouvert.png" id="imagevoletsbouton">Ouvrir tous les </br> volets</a>
				</div>
				<div id="formeboutondroite">
					<a href="#"  data-role="button" id="boutonstandar" data-iconpos="left" data-inline="true" >
						<img src="images/volets-fermer.png" id="imagevoletsbouton">Fermer tous les </br> volets</a>
				</div>
			</div>
		</div>


		<!--     	MODULE DE LA GESTION DES LUMIERES	 -->

		<div id ="carrebasdroite">
			<div>
				<a href="lumiere.html" data-role="button" id="boutonhautcarrebas" data-transition="pop">
				<img src="images/ampoule.png" class="imageampoule"><p  class="textboutonhaut">Gestion des Lumieres</p>
				</a>
			</div>
			
			<div class="bascarrelumiere">
				<div id="formeboutonlumiere">
					<a href="#"  data-role="button" id="boutonlumiere" data-iconpos="left" data-inline="true" >
						<img src="images/bouton-eteint.png" id="imagevoletsbouton">Eteindre toutes les </br> lumieres</a>
				</div>
				
			</div>
		</div>

		<!--     	MODULE DE LA GESTION DES RADIATEURS		 -->

		<div id ="carrecentralbas">
			<div>
				<a href="radiateur.html" data-role="button" id="boutonhautcarrehaut">
					<img src="images/radiateur.png" class="imageradiateur"><p class="textboutonhaut"> Gestion des radiateurs</p>
				</a>
			</div>
			<div>MODULE TEMPERATURE INTERIEUR</div>
			<div class="bascarreradiateur">
				<form>
				    <label for="slider-2" style="text-align:center">Augmenter/baisser </br> le thermostat central: </label>
				    <input type="range" name="slider-2" id="slider-2" data-highlight="true" min="0" max="40" value="15">
				</form>
			</div>
		</div>

	</div>
	</body>

</html>