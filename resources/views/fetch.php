<?php

//fetch.php
if(isset($_POST["id"]))
{
require_once 'login.php';
$connection = new mysqli($hostname, $username, $password, $database);
if ($connection->connect_error) {
    die("Fatal database error...");
} 
 $query = "SELECT * FROM product";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["sku"] = $row["sku"];
  $data["item"] = $row["item"];
  $data["width"] = $row["width"];
  $data["length"] = $row["length"];
  $data["height"] = $row["height"];
  $data['mass'] = $row['mass'];
  $data['volume'] = $row['volume'];
  $data['density'] = $row['density'];
 }

 echo json_encode($data);
}
?>

