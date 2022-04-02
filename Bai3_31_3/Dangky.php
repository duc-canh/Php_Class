<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h2>Đăng nhập</h2>
    <?php
        //xử lý form

        //xử lý lỗi chạy lần đầu
        $fulname = "";
        $user = "";
        $errorfullname = "";
        $nhanquangcao = "";
        //lỗi không có dữ liệu
        if(isset($_REQUEST["bsubmit"])){
            $fulname = $_REQUEST["hoten"];
            $user = $_REQUEST["user"];
            $pass = $_REQUEST["password"];
            if($fulname == ""){
                $errorfullname = 'bạn chưa nhập họ tên';
            } 
            //xử lý checkbox
            //nếu checkbox không được chọn thì biến đó không có trong request
            //phải sử dụng isset để kiểm tra có check hay không
            if(isset($_REQUEST["c1"]) == false){
                
                $nhanquangcao = $_REQUEST["c1"];
            }else{
                $nhanquangcao = "không nhận quảng cáo";
            }
            //với radio tương tự nhưng nên mặc định để chắc chắn
        }
    ?>
    <form  action="" method="get">
        <label for="">Họ tên</label>
        <input name="hoten" type="text" value="<?php echo $fulname ?>">
        <div class="btn btn-danger" value=""><?php echo $errorfullname ?></div>
        <label for="">Username</label>
        <input name="user" type="text" value="<?php echo $user ?>">
        <label for="">Password</label>
        <input type="password" name="password">
        <p>
            Đồng ý nhận quang cáo
            <input type="checkbox" name="c1" id="c1">
        </p>
        <button type="submit" name="bsubmit">Submit</button>
    </form>
</body>
</html>