<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script language="javascript" src="myscript.js"></script>
</head>
<body>
    <?php
        include('ketnoiCsdl.php');
        if(isset($_REQUEST["hoten"])==false){
            
        }else{
            $hoten = $_REQUEST["hoten"];
            $dienthoai = $_REQUEST["dienthoai"];
            $gioitinh = $_REQUEST["gioitinh"];
            $hinhanh = $_REQUEST["hinhanh"];
            if($hoten == "" || $dienthoai == "" || $hinhanh == ""){
                echo "<h3>Bạn chưa nhập đủ thông tin</h3>";
                echo "<h3><a href='themnv.php'>Quay lại trang nhập</a></h3>";
                die();
               
            }
            echo $dienthoai." : ".$hoten." : ".$gioitinh." : ".$hinhanh." : ";
            $sql ="INSERT INTO tbNhanvien VALUES(NULL,?,?,?,?)";
            $pdo_stm = $conn->prepare($sql);
            $pdo_stm->bindParam(1,$hoten);
            $pdo_stm->bindParam(2,$dienthoai);
            $pdo_stm->bindParam(3,$gioitinh);
            $pdo_stm->bindParam(4,$hinhanh);
            $ketqua = $pdo_stm->execute();
            if($ketqua==TRUE)
                    echo "<H3> THÀNH CÔNG </H3>";
                else
                    echo "<h3> LỖI THÊM DỮ LIỆU</h3>";
        }
    ?>
    <h2>Thêm nhân viên</h2>
    <form action="" method="get">
        <div>
            <label for="">Họ và tên</label>
            <input type="text" name="hoten" id="kthoten" onblur="checkht(this)">
            <div id="baoloiht" style="color:red"></div>
        </div>
        <div>
            <label for="">Điện thoại</label>
            <input type="text" name="dienthoai" id="ktdienthoai" onblur="checkdt(this)">
            <div id="baoloidt" style="color:red"></div>
        </div>
        <div>
            <label for="">Giới tính</label>
            <label for="">Nam</label>
            <input type="radio" name="gioitinh" value="0" checked>
            <label for="">Nữ</label>
            <input type="radio" name="gioitinh" value="1">
        </div>
        <div>
            <label for="">Hình ảnh</label>
            <input type="text" name="hinhanh" id="kthinhanh" onblur="checkha(this)">
            <div id="baoloiha" style="color:red"></div>
        </div>
        <button type="submit" name="sb" onclick="return kiemtra();">Add</button>
    </form>
    <h3><a href="danhsachnv.php">Danh sách nhân viên</a></h3>
</body>
</html>