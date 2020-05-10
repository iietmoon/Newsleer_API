<?php
// db connection
include '_Config/db_connection.php';

// GET api key from the url
$api_key= $_GET['apikey'];

echo $api_key;
?>