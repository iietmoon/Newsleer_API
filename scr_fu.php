<?php 

// Get the contents of the JSON file 
$url = file_get_contents("https://suche.dasnetzundich.de/?q=Maroc&categories=news&language=fr&format=json");
// Convert to array 
$array = json_decode($url, true);

//test it
echo json_encode($array, JSON_UNESCAPED_UNICODE);

?>