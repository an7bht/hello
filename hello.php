


<?php
    // mở kết nối tới mysql db
    $connection = mysqli_connect ("us-cdbr-east-05.cleardb.net", "b4e68142b2db41", "60a01a12", "heroku_2b76120d7232e57") ordie ("Error". mysqli_error ($connection));
?>
<?php
    //fetch table rows from mysql db
    $sql = "select * from sinhvien";
    $result = mysqli_query($connection, $sql) ordie("Error in Selecting " . mysqli_error($connection));
?>
<?php
    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
?>
<?php 
    echo json_encode($emparray);
?>