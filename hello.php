<?php
    //open connection to mysql db
    // $connection = mysqli_connect("us-cdbr-east-05.cleardb.net","b4e68142b2db41","60a01a12","heroku_2b76120d7232e57") or die("Error " . mysqli_error($connection));
    $connection = mysqli_connect("us-cdbr-east-05.cleardb.net","b4e68142b2db41","60a01a12","heroku_2b76120d7232e57") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select DiaChi from sinhvien";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        array_push($emparray, $row);
    }
    echo json_encode($emparray)."thanh cong";

    //close the db connection
    mysqli_close($connection);
?>