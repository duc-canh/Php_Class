<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="text-align: center; color: #090;">DANH SÁCH NHÂN VIÊN</h1>
    <p><a href="ThemNV.php">thêm nhân viên</a></p>
    <?php
    require_once("tbNhanvien.php");
    $rows = getListNhanvien();
    if($rows == null){
        echo '<h3>Lỗi hệ thống</h3>';
        die();
    }
    ?>

    <table width="1009" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="87" bgcolor="#FF9900">ID</td>
            <td width="212" bgcolor="#FF9900">HỌ TÊN</td>
            <td width="150" bgcolor="#FF9900">ĐIỆN THOẠI</td>
            <td width="165" bgcolor="#FF9900">GIỚI TÍNH</td>
            <td width="209" bgcolor="#FF9900">HÌNH ẢNH</td>
            <td width="172" bgcolor="#FF9900">XỬ LÝ</td>
        </tr>

        <?php
  foreach($rows as $row)
  {
  ?>
  <tr>
    <td> <?=$row["id"]?> </td>
    <td> <?=$row["hoten"]?> </td>
    <td> <?=$row["dienthoai"]?> </td>
    <td> <?=$row["gioitinh"]==0?"Nam":"Nữ"?> </td>
    <td> <?=$row["hinhanh"]?> </td>
    <td>
    <a href="SuaNV.php?id=<?=$row["id"]?>">Sửa</a> 
    - 
    <a href="XoaNV.php?id=<?=$row["id"]?>" 
onClick="return confirm('chắc chắn xóa?');">Xóa</a>
    </td>
  </tr>
  <?php
  }
  ?>
    </table>
</body>

</html>