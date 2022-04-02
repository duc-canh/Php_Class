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
        session_start();
        $user = $_REQUEST["user"];
        $pass = $_REQUEST["tPassword"];
        if($user == "admin" && $pass="123456"){
            $_SESSION["logined"] = "OK";
            $_SESSION["user"] = $user;
            echo "<h3>Đăng nhập thành công</h3>";
            echo "<h3>Mời vào trang <a href=\"admin.php\">Admin</a></h3>";
        }else{
            echo "<h3>Đăng nhập không thành công</h3>";
            echo "<h3>Mời đăng nhập lại <a href=\"login.php\">Login</a></h3>";
        }
    ?>
</body>
</html>