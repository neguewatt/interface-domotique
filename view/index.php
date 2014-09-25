<!DOCTYPE html>
<html>

	<head>
		

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