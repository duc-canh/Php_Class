<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giai pt bac 2</title>
    <?php
        $kq = "";
        if(isset($_REQUEST["btsubmit"])){
            $a = $_REQUEST["a"];
            $b = $_REQUEST["b"];
            $c = $_REQUEST["c"];
            if($a != null && $b != null && $c != null){
                $delta = $b * $b - (4 * $a * $c);
                if($delta < 0){
                  $kq ='Pt vo nghiem';
                }else if($delta == 0){
                    $x = (-$b)/(2 * $a);
                    $kq = 'Pt co 1 nghiem duy nhat : x = '.$x;
                    
                }else{
                    $x1 = (-$b + sqrt($delta))/(2 * $a);
                    $x2 = (-$b - sqrt($delta))/(2 * $a);
                    $kq = 'Pt co 2 nghiem lan luot la : x1 = '.$x1. ' :  x2 = '.$x2;
                }
            }else{
                $kq = 'ban chua nhap du tham so ';
            }
            
        }
    ?>
</head>
<body>
    <h2>Pt bậc 2</h2>
    <form action="" method="POST">
        <div>
            <label for="">Nhập tham số thứ nhất</label>
            <input type="number" name="a" required>
        </div>
        <div>
            <label for="">Nhập tham số thứ 2</label>
            <input type="number" name="b" required>
        </div>
        <div>
            <label for="">Nhập tham số thứ 3</label>
            <input type="number" name="c" required>
        </div>
        <button type="submit" name="btsubmit">Submit</button>
    </form>
    <h2>Kết quả sau khi tính </h2>
    <h3><?php echo $kq ?></h3>
</body>
</html>