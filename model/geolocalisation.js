function geolocalisation()
{
	if(navigator.geolocation)
	{
		navigator.geolocation.getCurrentPosition(function(position)
		{
			var latitude = position.coords.latitude;
			var longitude = position.coords.longitude;
			var tabposition = ["latitude" = latitude, "longitude" = longitude];
		});
		return tabposition;
	}
	else
	{
		return false;
	}
}