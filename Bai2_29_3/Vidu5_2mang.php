<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Mảng 2 chiều</h2>
    <?php
        $products = array(
            array("sp1","tive",50000),
            array("sp2","dong ho",100000));
            echo print_r($products);
    ?>

    <h3>Hiển thị danh sách sản phẩm</h3>
    <?php
        for($i = 0;$i<count($products);$i++){
            
    ?>
    <div>
        <h3>Ma sp:<?php echo $products[$i][0] ?> tên sp : <?php echo $products[$i][1] ?></h3>
        <h3>Giá sp <?php  echo $products[$i][2] ?></h3>
    </div>
    <?php
    
        }
    ?>
</body>

</html>