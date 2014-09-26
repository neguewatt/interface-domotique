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

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Accueil interface de domotique</title>
		<link rel="stylesheet" href="themes/domotique.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>

	</head>

	<body>
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<h1><img src="images/home.png" alt="home" class="imageheader">HOME</h1>
			</div>
				<div class= "carrecentral">
					<h1 class= "centreheure" id = 'heure'></h1>
					<div class= "centredate" id = 'date'></div>
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

		<div data-role="footer" class= "footer" class="ui-bar" >
		    <img  href="index.php" src="images/bouton-home.png" alt="home" class="imagefooterhome">
		    <img  href="volets.html" src="images/bouton-volets.png" alt="home" class="imagefooter">
		    <a href="#" data-icon="arrow-d">Bas</a>
		</div>

	</div>
	</body>

</html>