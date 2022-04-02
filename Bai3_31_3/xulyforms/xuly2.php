<h2>Xử lý forms</h2>
<?php
// $_GET["InputName"], $_POST["InputName"],
//sử dụng isset để kiểm tra biến có tồn tại hay không
if(isset($_POST["bSubmit"]) == false){
    echo "Mời đăng nhập <a href = 'forms2.php'> đăng nhập </a>";
    die();//dừng chương trình 
}
$user = $_POST['user'];
$password = $_POST['password'];

echo 'username = '.$user;
echo 'password = '.$password;


?>