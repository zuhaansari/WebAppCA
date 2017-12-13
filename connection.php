<?php

$db_username = "root";
$db_password = "";
$dbname = "bingeit";
$servername = "localhost";
$conn;

try {
  
  $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $dbname . ";port=3306", $db_username, $db_password);
//   echo "connected :) ";s
  
} catch(PDOExcecption $e) {
  
  echo $e . ":(";
}

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





