<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        if(isset($_POST["btsb"])){
            $tk = $_POST["tk"];
            $password = $_POST["password"];
        }
    ?>
</head>
<body>
    <h2>Thông tin TK</h2>
    <h4>Tài khoản : <?php echo $tk ?></h4>
    <h4>Mật khẩu : <?php echo $password ?></h4>
</body>
</html>