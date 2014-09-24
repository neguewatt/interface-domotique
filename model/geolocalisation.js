function geolocalisation()
{
	if(navigator.geolocation)
	{
		var tabposition = {};
		navigator.geolocation.getCurrentPosition(function(position, tabposition)
		{
			var latitude = position.coords.latitude;
			var longitude = position.coords.longitude; 
			tabposition = {"latitude" : latitude, "longitude" : longitude};
		});
		return tabposition;
	}
	else
	{
		return false;
	}
}