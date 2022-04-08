<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update </title>
</head>
<body>
    <?php
    require_once('tbNhanvien.php');
    $id = $_REQUEST["id"];
    $hoten = $_REQUEST["hoten"];
    $dienthoai = $_REQUEST["dienthoai"];
    $gioitinh = $_REQUEST["gioitinh"];
    $hinhanh = $_REQUEST["hinhanh"];
    $ketqua = update($id,$hoten,$gioitinh,$dienthoai,$hinhanh);
    if($ketqua == false){
        echo '<h3>Lỗi hệ thống</h3>';
    }else{
        echo '<h3>Thành công</h3>';
    }
    ?>
    <h2></h2>
</body>
</html>