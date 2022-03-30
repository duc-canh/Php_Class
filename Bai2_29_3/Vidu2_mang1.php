<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng theo chỉ số</title>
</head>

<body>
    <h2>Ví dụ mảng</h2>
    <?php
    //tạo mảng cách 1 sử dụng hàm array
    $arr = array();
      $a = array("html","css");
      $a[2] = "php";
      //tạo mảng cách 2 
      $b = ["hoa","cay"];
    //duyệt mảng
    //số phần tử mảng
    $n = count($a);
    echo "<h3>mảng a</h3>";
    for($i=0;$i<$n;$i++){
        echo "<p>$a[$i]</p>";
    }
    //foreach
    foreach($a as $x){
        echo "<p>$x</p>";
    }
    ?>
</body>

</html>