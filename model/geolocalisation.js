<script type = 'text/javascript' src = 'externe/jquery.js'></script>

if(navigator.geolocation)
{
	navigator.geolocation.getCurrentPosition(function(position)
	{
		alert("latitude : " + position.coords.latitude + ", longitude : " + position.coords.longitude);
	});
}
else
	alert("votre navigateur ne peux afficher la geolocalisation");