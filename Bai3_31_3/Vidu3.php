
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //tham chiếu
    //xây dựng hàm đầu vao flaf a và b
    function Traodoi(&$a,&$b){
        $tam = $a;
        $a = $b;
        $b = $tam;
    }
?>
</head>
<body>
    <h2>Sử dụng tham chiếu</h2>
    <?php
        $a = 10;
        $b = 20;
        Traodoi($a,$b);
        echo 'a = '.$a;
        echo 'b = '.$b
    ?>
</body>
</html>