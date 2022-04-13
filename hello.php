<?php
$servername = "us-cdbr-east-05.cleardb.net";
$username = "b4e68142b2db41";
$password = "60a01a12";

try {
  $conn = new PDO("mysql:host=$servername;dbname=heroku_2b76120d7232e57", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
  $array = $pdo->query("SELECT * FROM table sinhvien")->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($array);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>