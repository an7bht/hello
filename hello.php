<?php 
// kết nối tới mysql
$conn = mysqli_connect("localhost", "root", "123456", "sqlquanlysinhvien");
// câu lệnh truy vấn sql
$sql = "SELECT * FROM sinhvien";
// thực hiện cầu lên truy vấn và kết nối
$result = mysqli_query($conn, $sql);
// tạo một mảng
$arr = array();

while ($rows = mysqli_fetch_assoc($result)) {
	array_push($arr, $rows);
}
// xuất json
echo json_encode($arr);

?>