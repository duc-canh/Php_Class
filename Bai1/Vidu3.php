<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Vidu3.css">
</head>
<body>
    <?php
        for($i=1;$i<=6;$i++){
            if($i%2==1){
            
    ?>
         <div class="product bg1">
    <?php
        }else{
    ?>
           <div class="product bg2">
    <?php
        }
    ?>
        <h3>Tên sản phẩm</h3>
        <img src="" alt="">
        <h4>Giá : 200.000Vnd</h4>
    </div>
    <?php
       }
    ?>
</body>
</html>