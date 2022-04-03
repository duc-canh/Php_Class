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
      include('ketnoiCsdl.php');
      $id = $_REQUEST["id"];
      $sql = "DELETE FROM tbNhanvien WHERE id=$id";
      if ($conn->query($sql) == TRUE) {
        echo "Record deleted successfully";
        echo "<h3>Quay lại <a href=\"danhsachnv.php\">Danh sách nv</a></h3>";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
    ?>
</body>
</html>