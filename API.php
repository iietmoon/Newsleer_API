<?php 


include "_Helpers/url_helper.php";
// Keyword
$query = $_GET["q"];
// Category "News, music, social media, images ..."
$categories = $_GET["categories"];
// languages, +30 language supported
$language = $_GET["language"];
// format of query "json, csv, rss"
$format = $_GET["format"];

// Get the contents of the JSON file 
$url = file_get_contents("".$url_5_fr."/?q=".$query."&categories=".$categories."&language=".$language."&format=".$format."");
// Convert it to an array 
$array = json_decode($url, true);

//result
echo json_encode($array, JSON_UNESCAPED_UNICODE);
?>


