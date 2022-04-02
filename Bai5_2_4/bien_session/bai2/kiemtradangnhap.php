<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra đăng nhập</title>
</head>
<body>
    <?php
        if(isset($_SESSION["logined"])==false || isset($_SESSION["logined"]) == ""){

       
    ?>
    <h3 color="red">Bạn chưa đăng nhập</h3>
    <a href="login.php">Mời đăng nhập</a>
    <?php
    die();
     }
    ?>
</body>
</html>