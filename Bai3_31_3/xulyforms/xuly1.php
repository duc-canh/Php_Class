<h2>Xử lý forms</h2>
<?php
// $_GET["InputName"] : chỉ sử dụng với method GET
//, $_POST["InputName"] chỉ sử dụng với method POST
//$_REQUERT["InputName"] dùng cho cả hai
$user = $_GET['user'];
$password = $_GET['password'];

echo 'username = '.$user;
echo 'password = '.$password;


?>