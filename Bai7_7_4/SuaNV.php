<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Nhân viên</title>
</head>
<body>
    <?php
    require_once('tbNhanvien.php');
    $id = $_REQUEST["id"];
    $row = timKiemId($id);
        $hoten = $row["hoten"];
        $dienthoai = $row["dienthoai"];
        $gioitinh = $row["gioitinh"];
        $hinhanh = $row["hinhanh"];
    ?>
    <h2>Edit nhân viên</h2>
    <form action="update.php?id=<?=$row["id"]?>" method="post">
        <div>
            <label for="">Họ và tên</label>
            <input type="text" name="hoten" id="kthoten" onblur="checkht(this)" value="<?php echo $hoten ?>">
            <div id="baoloiht" style="color:red"></div>
        </div>
        <div>
            <label for="">Điện thoại</label>
            <input type="text" name="dienthoai" id="ktdienthoai" onblur="checkdt(this)" value="<?php echo $dienthoai ?>">
            <div id="baoloidt" style="color:red"></div>
        </div>
        <div>
            <label for="">Giới tính</label>
            <?php
            if($gioitinh == 0){
            ?>
                 <label for="">Nam</label>
                <input type="radio" name="gioitinh" value="0" checked>
                <label for="">Nữ</label>
                <input type="radio" name="gioitinh" value="1" >
             <?php
             }else{
            ?>
               <label for="">Nam</label>
                <input type="radio" name="gioitinh" value="0" >
                <label for="">Nữ</label>
                <input type="radio" name="gioitinh" value="1" checked>
           <?php
             }
           ?>
        </div>
        <div>
            <label for="">Hình ảnh</label>
            <input type="text" name="hinhanh" id="kthinhanh" onblur="checkha(this)" value="<?php echo $hinhanh ?>">
            <div id="baoloiha" style="color:red"></div>
        </div>
        <button type="submit" name="sb" onclick="return kiemtra();">Update</button>
    </form>
</body>
</html>