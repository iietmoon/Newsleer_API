<?php 

// Get the contents of the JSON file 
$url = file_get_contents("http://localhost/Newsleer/_API.php");
// Convert to array 
$array = json_decode($url, true);

//test it
echo json_encode($array, JSON_UNESCAPED_UNICODE);
?>