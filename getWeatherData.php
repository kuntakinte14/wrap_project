<?php
// API Key for the Forecast API
$apiKey = '8e3b70d7f813f72f6de4b3d578a83169';
$lat = $_GET['latitude'];
$long = $_GET['longitude'];

// Construction the URL for calling the Forecast API using curl
$url = 'https://api.forecast.io/forecast/'.$apiKey.'/'.$lat.','.$long.'?exclude=[minutely,hourly,daily,alerts,flags]';

//  Initiate curl
$ch = curl_init();

// Set options
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);

// Execute api call
$result=curl_exec($ch);

// Close
curl_close($ch);

// Output result to be received and utilized in client-side code
echo $result;

?>