<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Cần đăng nhập</title>
    <?php
        session_start();
        require("kiemtradangnhap.php");
    ?>
</head>
<body>
    <h2>Dành cho Admin</h2>
    <h3>Xin chào : <?php echo $_SESSION["user"] ?></h3>
    <h3><a href="logout.php">Thoát</a></h3>
</body>
</html>