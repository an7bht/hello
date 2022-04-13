<?php
$servername = "us-cdbr-east-05.cleardb.net";
$username = "b4e68142b2db41";
$password = "60a01a12";

try {
  $conn = new PDO("mysql:host=$servername;dbname=heroku_2b76120d7232e57", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";

  $return_arr = array();

    $fetch = mysql_query("SELECT * FROM sinhvien"); 

    while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
        $row_array['MSSV'] = $row['MSSV'];
       

        array_push($return_arr,$row_array);
    }

    echo json_encode($return_arr);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>