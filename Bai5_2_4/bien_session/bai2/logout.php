<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <?php
        session_start();
        session_destroy();
    ?>
    <h3>Bạn đã đăng xuất thành công</h3>
    <h3><a href="admin.php">Về trang chủ</a></h3>
</body>
</html>