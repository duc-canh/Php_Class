<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Mảng dạng key - value</h3>
    <?php
        $cart=array("Sp1"=>1,"sp2"=>2);
        $cart["sp3"] = 4;
        echo "<h3>Gio hang</h3>";
        foreach($cart as $pcode =>$quantity){
            echo "<h4>ma sp : $pcode , so luowng $quantity</h4>";
        }
       $keys = array_keys($cart);
       for($i = 0;$i<count($cart);$i++){
           $key = $keys[$i];
           echo "$keys[$i] : so luong $cart[$key]";
       }
       //su dung ham print_r($bienmang) ; hiển thị cấu trúc mảng
       echo print_r($cart);
    ?>
</body>
</html>