<?php
require_once('ketnoiCsdl.php');
//hàm trả về mảng trả về các nhân viên từ bảng nv
function getListNhanvien(){
    $conn = ConnectDb();
    if($conn == null){
        return null;
    }
    $sql = "SELECT * FROM tbnhanvien";
    $pdo_stm = $conn->prepare($sql);
    $ketqua = $pdo_stm->execute();
    if($ketqua==FALSE)
        return null;
    if($pdo_stm->rowCount()<=0)
        die("<h3>CHƯA CÓ DỮ LIỆU</h3>");
    else{
        $rows = $pdo_stm->fetchAll();
        return $rows;
        }
    }

function add($hoten,$dienthoai,$gioitinh,$hinhanh){
    $conn = ConnectDb();
    if($conn == null){
        return null;
    }
    $sql = "INSERT INTO tbnhanvien (id,hoten,dienthoai,gioitinh,hinhanh) VALUES (null,?,?,?,?)";
    $pdo_stm = $conn->prepare($sql);
    $pdo_stm->bindParam(1,$hoten);
    $pdo_stm->bindParam(2,$dienthoai);
    $pdo_stm->bindParam(3,$gioitinh);
    $pdo_stm->bindParam(4,$hinhanh);
    $ketqua = $pdo_stm->execute();
    return $ketqua;
}
function timKiemId($id){
    $conn = ConnectDb();
    if($conn == null){
        return null;
    }
    if($id=="" || is_numeric($id)==false)
	die("<p>id không được rỗng và phải là số</p>");
    $sql = "SELECT * FROM tbnhanvien WHERE id=?";
    $pdo_stm = $conn->prepare($sql);
    $pdo_stm->bindParam(1,$id);
    $ketqua = $pdo_stm->execute();
    if($ketqua==FALSE)
        return null;
    if($pdo_stm->rowCount()<=0)
        die("<h3>CHƯA CÓ DỮ LIỆU</h3>");
    else{
        $row = $pdo_stm->fetch();
        return $row;
    }
}
function update($id,$hoten,$dienthoai,$gioitinh,$hinhanh){
    $conn = ConnectDb();
    if($conn == null){
        return null;
    }
    $sql = "UPDATE tbnhanvien SET hoten = ?, dienthoai = ?,gioitinh = ?,hinhanh = ? WHERE id = ?";
    $pdo_stm = $conn->prepare($sql);
    $pdo_stm->bindParam(1,$hoten);
    $pdo_stm->bindParam(2,$dienthoai);
    $pdo_stm->bindParam(3,$gioitinh);
    $pdo_stm->bindParam(4,$hinhanh);
    $pdo_stm->bindParam(5,$id);
    $ketqua = $pdo_stm->execute();
    return $ketqua;
}
function delete($id){
    $conn = ConnectDb();
    if($conn == null){
        return null;
    }
    $sql = "DELETE FROM tbnhanvien WHERE id=?";
    $pdo_stm = $conn->prepare($sql);
    $pdo_stm->bindParam(1,$id);
    $ketqua = $pdo_stm->execute();
    return $ketqua;
}
?>