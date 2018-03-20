
<?php

// // Add "?id=<number> at the end of the URL string

if(!empty($_GET["id"])) {
	$id = $_GET["id"];
} else {
	$id = 1;
}

$str_url = "http://127.0.0.1:8000/addresses/$id";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $str_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

$json = json_decode($result);

$strLat = $json->lat;
$strLong = $json->long;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Map Location Example</title>
        
        <style type="text/css">
            /* Set a size for our map container, the Google Map will take up 100% of this container */
            #map {
                width: 500px;
                height: 500px;
            }
        </style>
        
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAh96uKMhXWkhgDWeedY6Vy6Vw8gcuVK9w"></script>
        
        <script type="text/javascript">
            
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                
                var mapOptions = {
                    
                    zoom: 7,
		    
                    center: new google.maps.LatLng(<?= $strLat ?>, <?= $strLong ?>), 
		    
                    styles: [
						{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}] };
                var mapElement = document.getElementById('map');
		
                var map = new google.maps.Map(mapElement, mapOptions);
		
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
	
	
	
    </head>
    <body>

        <div id="map"></div>
	
			<h3>
				<?php echo $strLat = $json->address; ?><br>
				<?php echo $strLat = $json->city; ?>, <?php echo $strLat = $json->country; ?>
			</h3>
			<h4></h4>
    </body>
</html>
