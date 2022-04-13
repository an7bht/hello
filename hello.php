<?php
$servername = "us-cdbr-east-05.cleardb.net";
$username = "b4e68142b2db41";
$password = "60a01a12";

try {
  $conn = new PDO("mysql:host=$servername;dbname=heroku_2b76120d7232e5", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfullyyyyyy";
  $sql = "SELECT * FROM sinhvien";
// thực hiện cầu lên truy vấn và kết nối
    $result =new PDO(mysqli_query($conn, $sql));
// tạo một mảng
    $arr = array();

    while ($rows = mysqli_fetch_assoc($result)) {
	array_push($arr, $rows);
        }
// xuất json
    echo json_encode($arr);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>