<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý login</title>
</head>
<body>
    <h2>Xử lý login</h2>
    <?php
        include('C:/xampp/htdocs/Php_Class/Bai5_2_4/Csdl/ketnoiCsdl.php');
        session_start();
        $user = $_REQUEST["user"];
        $pass = $_REQUEST["tPassword"];
        $sql = "SELECT * FROM tb where username = '$user' AND password = '$pass'";
        $pdo_stm = $conn->prepare($sql);
        $ketqua = $pdo_stm->execute();
        if($ketqua == false){
            echo '<h3>Lỗi câu lệnh sql</h3>';
        }
        $sobanghi = $pdo_stm->rowCount();
        if($sobanghi > 0){
            $row = $pdo_stm->fetch(PDO::FETCH_BOTH);
            $_SESSION["logined"] = "OK";
            $_SESSION["user"] = $row["username"];//lấy giá trị cột username
            $_SESSION["hoten"] = $row["hoten"];
            echo "<h3> ĐĂNG NHẬP THÀNH CÔNG</h3>";
            echo "<a href=\"Admin.php\"> Vào Trang Admin</a>";
        }
        else
        {
            $_SESSION["logined"] = "";
            echo "<h3> ĐĂNG NHẬP SAI TÀI KHOẢN</h3>";
            echo "<a href=\"Login.php\"> Mời Đăng nhập</a>";
        }
        //ket noi co su du lieu để đăng nhập
    ?>
</body>
</html>