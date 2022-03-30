<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //isset($tenbien) : để kiểm tra biến đã được gán giá trị chưa
        if(isset($hoten)){
            echo "<h2>$hoten</h2>";
        }else{
            echo "chua khoi tao \$hoten";
        }
        //unset($tenbien) : hủy giá trị của 1 biến
        $hoten = "abc";
        echo "<h2>Hello : $hoten</h2>";
        unset($hoten);
        echo $hoten;
    ?>
</body>
</html>