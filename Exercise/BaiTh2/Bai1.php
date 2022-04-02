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
    require("ic_function.php");
    $d="";
    $r="";
    $chuvi =0;
    $dientich = 0;
    $loi = "";
    if(isset($_REQUEST["dai"])==true)//nếu form đã submit
    {
        $d = $_REQUEST["dai"];
        $r = $_REQUEST["rong"];
        //Kiểm tra lỗi
        if($d=="" || $r=="")
        $loi= "Chưa nhập đủ chiều dài và rộng";
        else if(is_numeric($d)==false || is_numeric($r)==false)
        $loi= "chiều dài và rộng phải nhập số";
        //không có lỗi thì tính chu vi và diện tích
        if($loi=="")
        {
        $chuvi = chuvi($d,$r);
        $dientich = dientich($d,$r);
        }
    }
?>
    <h2>Tính diện tích chu vi hình chữ nhật</h2>
    <div style="color:red"><?=$loi?></div>
    <form name="f1" id="f1" method="get" action="">
        Chiều dài: <input type="text" name="dai" value="<?=$d?>"><br><br>
        Chiều rộng:<input type="text" name="rong" value="<?=$r?>"><br><br>
        <input type="submit" name="b1" id="b1" value="Tính CV và DT">
    </form>
    <p> Chu vi = <?=$chuvi?> </p>
    <p> Diện tích = <?=$dientich?> </p>
</body>

</html>