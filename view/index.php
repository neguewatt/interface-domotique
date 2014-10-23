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
				<div class= "centremeteo" id = 'meteo'><img src = 'images/ajax-loader.gif' alt = 'chargement'> Géolocalisation ...</div>
			</div>


				<!--	Inclusion du javascript	-->
				<script type="text/javascript" src = "../model/externe/jquery.js" ></script>
				<?php 
					include('../model/script.php');
					include('../controller/script.php');
					include('script.php');
				?>

				


				<!--     	MODULE DE L'ALARME		 -->

					<div id="carredroite">
						<div>
							<p style="text-align: center">MODULE ALARME</p>
							<a href="#popupDialog" data-rel="popup" data-position-to="window"  data-inline="false" data-transition="fade" data-theme="a">
								<img class="popphoto" id="boutonserrure" type="image" src="images/serrure.png" > <a/>
							<div data-role="popup" id="popupDialog" data-overlay-theme="a" data-theme="c" data-dismissible="false" style="max-width:400px;" class="ui-corner-all">
							    <div data-role="header" data-theme="a" class="ui-corner-top">
							        <h1>Gestion de l'alarme</h1>
							    </div>
							    <div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
							        <h3>Tappez le code pour allumer / desactiver l'alarme.</h3>
							        <div id ="boutonchiffre">
								        <a href="#" data-role="button" id="tailleboutonchiffre" style="float : left" >1</a>
								        <a href="#" data-role="button" id="tailleboutonchiffre" style="float : right" >3</a>
								        <a href="#" data-role="button" id="tailleboutonchiffre" style="float : right" >2</a>
								        <a href="#" data-role="button" id="tailleboutonchiffre" style="float : left" >4</a>
								        <a href="#" data-role="button" id="tailleboutonchiffre" style="float : right" >6</a>
								        <a href="#" data-role="button" id="tailleboutonchiffre" style="float : right" >5</a>
								        <a href="#" data-role="button" id="tailleboutonchiffre" style="float : left" >7</a>
								        <a href="#" data-role="button" id="tailleboutonchiffre" style="float : right" >9</a>
								        <a href="#" data-role="button" id="tailleboutonchiffre" style="float : right" >8</a>
								        <a href="#" data-role="button" id="tailleboutonchiffre" style="float : left">0</a>
							   	 	</div>
							        <a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="c">annuler</a> 
							    </div>
							</div>
						</div>
						<div>
							<p style="text-align: center"> MODULE CONSOMATION ENERGIE </p>
						</div>

					</div>

				<!--     	MODULE DES CAMERAS		 -->

					<div id="carrecentral">
						<div>
							<p style="text-align: center">CAMERA INTERRIEUR</p>
												

							<a href="#popupCAM1" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="images/bouton-robot.png" alt="Paris, France" style="width:30%"></a>
							<a href="#popupCAM2" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="images/bouton-robot.png" alt="Paris, France" style="width:30%"></a>
							<a href="#popupCAM3" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="images/bouton-robot.png" alt="Paris, France" style="width:30%"></a>

							<div data-role="popup" id="popupCAM1" data-overlay-theme="a" data-theme="d" data-tolerance="15,15" class="ui-content">
							    <iframe src="http://player.vimeo.com/video/41135183" width="497" height="298" seamless></iframe>		 
							</div>
							<div data-role="popup" id="popupCAM2" data-overlay-theme="a" data-theme="d" data-tolerance="15,15" class="ui-content">
							    <iframe src="http://player.vimeo.com/video/41135183" width="497" height="298" seamless></iframe>		 
							</div>
							<div data-role="popup" id="popupCAM3" data-overlay-theme="a" data-theme="d" data-tolerance="15,15" class="ui-content">
							    <iframe src="http://player.vimeo.com/video/41135183" width="497" height="298" seamless></iframe>		 
							</div>
						</div>
						<div>
							<p style="text-align: center"> CAMERA EXTERRIEUR</p>

							<a href="#popupCAM1" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="images/bouton-robot.png" alt="Paris, France" style="width:30%"></a>
							<a href="#popupCAM2" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="images/bouton-robot.png" alt="Paris, France" style="width:30%"></a>
							<a href="#popupCAM3" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="images/bouton-robot.png" alt="Paris, France" style="width:30%"></a>

							<div data-role="popup" id="popupCAM1" data-overlay-theme="a" data-theme="d" data-tolerance="15,15" class="ui-content">
							    <iframe src="http://player.vimeo.com/video/41135183" width="497" height="298" seamless></iframe>		 
							</div>
							<div data-role="popup" id="popupCAM2" data-overlay-theme="a" data-theme="d" data-tolerance="15,15" class="ui-content">
							    <iframe src="http://player.vimeo.com/video/41135183" width="497" height="298" seamless></iframe>		 
							</div>
							<div data-role="popup" id="popupCAM3" data-overlay-theme="a" data-theme="d" data-tolerance="15,15" class="ui-content">
							    <iframe src="http://player.vimeo.com/video/41135183" width="497" height="298" seamless></iframe>		 
							</div>
						</div>
					</div>

				<!--     	MODULE DE LA GESTION DES VOLETS		 -->

				<div id="carrebasgauche">
					<div>	
						<a href="volets.html" data-role="button" id="boutonhautcarrebas" data-transition="pop">
						<img src="images/fenetre.png" class="imagefenetre"><p  class="textboutonhaut">Gestion des volets</p>
						</a>
					</div>
					<div>
						<input type="checkbox" name="chambre "style="margin-top: 30px">
						<input type="checkbox" name="salon "style="margin-top: 75px">
						<input type="checkbox" name="cuisine "style="margin-top: 115px">
					</div>
					<div class="tableaupieces">		
						<ul id="two" class="tablist-content" data-role="listview" data-inset="true">
					        <li><a href="#popupUndismissible" data-transition="turn" data-role="button" data-inline="true" data-rel="popup" data-dismissible="false">Chambre</a></li>
					        <li><a href="#popupUndismissible" data-transition="turn" data-role="button" data-inline="true" data-rel="popup" data-dismissible="false">Salon</a></li>
					        <li><a href="#popupUndismissible" data-transition="turn" data-role="button" data-inline="true" data-rel="popup" data-dismissible="false">Cuisine</a></li>
					    </ul>
					</div>
					<div data-role="popup" id="popupUndismissible" class="ui-content" style="margin-left: 230px;margin-left: 230px;width: 100%;height: 50px;border-top-width: 0px;padding-top: 8px" data-dismissible="false">
					    <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-left">Fermer</a>
					    <form>
					    	<label for="slider-1">Volets :</label>
					    	<input type="range" name="slider-1" id="slider-1" min="0" max="100" value="50">
					    </form>
					</div>

					<div class="bascarrevolets">
						<div  data-inline="true">
							<img id="imagevoletsbouton" src="images/volets-ouvert.png">
							<p id="tailletextevolets">Ouverture/Fermeture</p>
							<a href=""><img class="imageflechehaut" type="image" src="images/flechehaut.png"></a>
							<a href=""><img class="imagefleche" type="image" src="images/stop.png"></a>
							<a href=""><img class="imagefleche" type="image" src="images/flechebas.png"></a>
						</div>
					</div>
				</div>

				

				<!--     	MODULE DE LA GESTION DES LUMIERES	 -->

				<div id ="carrebasdroite">
					<div>
						<a href="lumiere.html" data-role="button" id="boutonhautcarrebas" data-transition="pop">
						<img src="images/ampoule.png" class="imageampoule"><p  class="textboutonhaut">Gestion des Lumières</p>
						</a>
					</div>
					
					<div class="bascarrelumiere">
						<div>
							<a href="#">
								<img src="images/bouton-eteint.png" id="imagevoletsbouton" type="image"></a>
								<p id="tailletextlumiere">Eteindre toutes les lumieres</p>
						</div>
						
					</div>
				</div>

				<!--     	MODULE DE LA GESTION DES VOLETS		 -->

				<div id="carrecentralbas">
					<div>	
						<a href="volets.html" data-role="button" id="boutonhautcarrebas" data-transition="pop">
						<img src="images/fenetre.png" class="imagefenetre"><p  class="textboutonhaut">Gestion des volets</p>
						</a>
					</div>
					<div>
						<input type="checkbox" name="chambre "style="margin-top: 30px">
						<input type="checkbox" name="salon "style="margin-top: 75px">
						<input type="checkbox" name="cuisine "style="margin-top: 115px">
					</div>
					<div class="tableaupieces">		
						<ul id="two" class="tablist-content" data-role="listview" data-inset="true">
					        <li><a href="#popupUndismissible" data-transition="turn" data-role="button" data-inline="true" data-rel="popup" data-dismissible="false">Chambre</a></li>
					        <li><a href="#popupUndismissible" data-transition="turn" data-role="button" data-inline="true" data-rel="popup" data-dismissible="false">Salon</a></li>
					        <li><a href="#popupUndismissible" data-transition="turn" data-role="button" data-inline="true" data-rel="popup" data-dismissible="false">Cuisine</a></li>
					    </ul>
					</div>
					<div data-role="popup" id="popupUndismissible" class="ui-content" style="margin-left: 230px;margin-left: 230px;width: 100%;height: 50px;border-top-width: 0px;padding-top: 8px" data-dismissible="false">
					    <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-left">Fermer</a>
					    <form>
					    	<label for="slider-1">Volets :</label>
					    	<input type="range" name="slider-1" id="slider-1" min="0" max="100" value="50">
					    </form>
					</div>

					<div class="bascarrevolets">
						<div  data-inline="true">
							<img id="imagevoletsbouton" src="images/volets-ouvert.png">
							<p id="tailletextevolets">Ouverture/Fermeture</p>
							<a href=""><img class="imageflechehaut" type="image" src="images/flechehaut.png"></a>
							<a href=""><img class="imagefleche" type="image" src="images/stop.png"></a>
							<a href=""><img class="imagefleche" type="image" src="images/flechebas.png"></a>
						</div>
					</div>
				</div>
				
				<!--     	MODULE DE LA GESTION DES RADIATEURS		 -->

				<div id ="carrecentralbas">
					<div>
						<a href="radiateur.html" data-role="button" id="boutonhautcarrehaut">
							<img src="images/radiateur.png" class="imageradiateur"><p class="textboutonhaut"> Gestion des </br> radiateurs</p>
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