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
    include('ketnoiCsdl.php');
    $id = $_REQUEST["id"];
    $hoten = $_REQUEST["hoten"];
    $dienthoai = $_REQUEST["dienthoai"];
    $gioitinh = $_REQUEST["gioitinh"];
    $hinhanh = $_REQUEST["hinhanh"];
    $sql = "UPDATE tbNhanvien SET hoten='".$hoten."' ,dienthoai='".$dienthoai."',
     gioitinh='".$gioitinh."', hinhanh='".$hinhanh."' WHERE id= $id";
    if ($conn->query($sql) == TRUE) {
        echo "update thành công";
    } else {
        echo "Update thất bại: ";
    }
    ?>
    <h2></h2>
</body>
</html>