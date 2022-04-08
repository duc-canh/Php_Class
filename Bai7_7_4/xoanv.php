<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa nv</title>
</head>
<body>
    <?php
        require_once('tbNhanvien.php');
      $id = $_REQUEST["id"];
      $ketqua = delete($id);
      if ($ketqua == TRUE) {
        echo "Record deleted successfully";
        echo "<h3>Quay lại <a href=\"danhsachnv.php\">Danh sách nv</a></h3>";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
    ?>
</body>
</html>