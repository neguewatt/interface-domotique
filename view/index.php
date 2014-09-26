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

	<body id="imageecran">
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="fixed">
				<h1><img src="images/home.png" alt="home" class="imageheader">HOME</h1>
			</div>
				<div id="carregauche">
					<p style="text-align: center"> RECAP MODULE TEMPERATURE INTERIEUR</p>
				</div>
				<div id ="carredroite">
					<p style="text-align: center"> RECAP MODULE TEMPERATURE RADIATEUR (GESTION)</p>
					<div class="bascarre">
						<form>
						    <label for="slider-2">temperature de la maison : </label>
						    <input type="range" name="slider-2" id="slider-2" data-highlight="true" min="0" max="40" value="15">
						</form>
					</div>
				</div>

				<div id="carrecentral">
					<h1 class= "centreheure" id = 'heure'></h1>
					<p class= "centredate" id = 'date'></p>
					<div id = 'geoloc'>
						<input type = 'hidden' id = 'latitude'></input>
						<input type = 'hidden' id = 'longitude'></input>	
						<div id = 'erreur'></div>		
					</div>
					<div class= "centremeteo" id = 'meteo'></div>
				</div>


			<!--	Inclusion du javascript	-->
			<script type="text/javascript" src = "../model/externe/jquery.js" ></script>
			<?php 
				include('../model/script.php');
				include('../controller/script.php');
				include('script.php');
			?>


		<div id="carrebasgauche">
			<div>
				<p><img src="images/fenetre.png" class="imagefooter">Gestion des volets</p>
			</div>



			<div class="bascarre">
				<div id="formeboutongauche">
					<a href="#"  data-role="button" id="boutonstandar" ><img src="images/volets-ouvert.png" classe="imagefooter"> </a>
				</div>
				<div id="formeboutondroite">
					<a href="#"  data-role="button" id="boutonstandar" ></a>
				</div>
			</div>
		</div>
		<div id ="carrebasdroite">
			<p style="text-align: center"> RECAP MODULE LUMIERES (ETEINT OU ALLUMER)</p>
			
			<div class="bascarre">
				<form>
				    <label for="flip-1">Interrupteurs allumés : </label>
				    <img src="images/ampoule-allumer.png">
				    <select name="flip-1" id="flip-1" data-role="slider">
				       	<option value="off">
				        	MARCHE
				        </option>
				        <option value="on">
				        	ARRET
				        </option>
				    </select>
				    <img src="images/ampoule-eteint.png">
				</form>
			</div>
		</div>
	</div>
	</body>

</html>