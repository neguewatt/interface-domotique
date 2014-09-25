<!DOCTYPE html>
<html>

	<head>
		<title>Accueil de l'interface domotique</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
	</head>

	<body>
		
		<div id = 'date'></div>
		<div id = 'heure'></div>
		<div id = 'geoloc'>
			<input type = 'hidden' id = 'latitude'></input>
			<input type = 'hidden' id = 'longitude'></input>	
			<div id = 'erreur'></div>		
		</div>

		<!--	Inclusion du javascript	-->
		<script type="text/javascript" src = "../model/externe/jquery.js" ></script>
		<?php 
			include('../model/script.php');
			include('../controller/script.php');
			include('script.php');
		?>
		

	</body>

</html>