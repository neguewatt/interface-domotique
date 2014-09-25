<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
<<<<<<< HEAD
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Accueil interface de domotique</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="themes/domotique.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
=======
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Accueil interface de domotique</title>
		<link rel="stylesheet" href="themes/domotique.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
>>>>>>> FETCH_HEAD
	</head>

	<body>
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<h1><img src="images/home.png" alt="home" class="imagehome">HOME</h1>
			</div>

			<div id = 'date'></div>
			<div id = 'heure'></div>
			<div id = 'geoloc'>
				<input type = 'hidden' id = 'latitude'></input>
				<input type = 'hidden' id = 'longitude'></input>	
				<div id = 'erreur'></div>		
			</div>
			<div id = 'meteo'></div>

			<!--	Inclusion du javascript	-->
			<script type="text/javascript" src = "../model/externe/jquery.js" ></script>
			<?php 
				include('../model/script.php');
				include('../controller/script.php');
				include('script.php');
			?>
		
		</div>
	</body>

</html>