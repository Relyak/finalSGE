<?php

$json = file_get_contents('variables.json');
$json_data = json_decode($json, true);

$servername = $json_data["servername"];
$username = $json_data["username"];
$password = $json_data["password"];
//$salt= $json_data["salt"];

try {
  $conn = new PDO("mysql:host=$servername;dbname=sge", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>