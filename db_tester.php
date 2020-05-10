
<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "api_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$url_id = mysql_real_escape_string($_GET['api_key']);

$sql = "SELECT api_key FROM api_key WHERE api_key='$url_id'";

$result = $conn->query($sql);

if(mysql_num_rows($result) >0){
   //found
   echo 'true key';
}else{
   //not found
   echo 'wrong key';
}

$conn->close();
?>