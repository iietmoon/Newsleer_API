
<?php

include '_Config/db_connection.php';
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
   //not found
   if ($_GET['key']){

      $key = $_GET['api_key'];
      $sql = mysql_query("SELECT * FROM keys WHERE apikey='$key'");
      $result = $conn->query($sql);

      if(mysqli_num_rows($result) > 0){

         echo "the api key exit";

      }else{

         echo "the api key not exit";
      }

   }else{

      echo "you need an api key";
   }
      

}

$conn->close();
?>