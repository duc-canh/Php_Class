<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sử dụng include</title>
</head>

<body>
   
    <h2>Sử dụng tham chiếu</h2>
    <?php
    //ví dụ về include và require 
     //include("my_function.php");
     //trường hợp 
     //include: giao diện bình thường, nếu sai thì các lệnh sau vẫn hoạt động bình thường
     //require : sử dụng hàm , nếu sai thì dừng luôn trang web
     //require-once : giống như require nhưng tối ưu hơn : tự tìm kiếm và bỏ những cái trùng
    
     require("my_function.php");
        $a = 10;
        $b = 20;
        Traodoi($a,$b);
        echo 'a = '.$a;
        echo 'b = '.$b
    ?>
</body>

</html>