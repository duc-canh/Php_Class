<?php
require_once('ketnoiCsdl.php');
//hàm trả về mảng trả về các nhân viên từ bảng nv
function getListNhanvien(){
    $conn = ConnectDb();
    if($conn == null){
        return null;
    }
    $sql = "SELECT * FROM tbNhanvien";
    $pdo_stm = $conn->prepare($sql);
    $ketqua = $pdo_stm->execute();
    if($ketqua==FALSE)
        return null;
    if($pdo_stm->rowCount()<=0)
        die("<h3>CHƯA CÓ DỮ LIỆU</h3>");
    $rows = $pdo_stm->fetchAll();
    }

?>