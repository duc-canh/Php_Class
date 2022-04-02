<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if(isset($_GET["btsubmit"])){
        $nd = $_GET["nd"];
        $sl = $_GET['sl'];
    }
       
    ?>
    <style>
        .c1{
            width: 100px;
            height:50px;
            border:1px solid red;
            float: left;
            margin:5px;
        }
    </style>
</head>
<body>
    <form action="">
        <div>
            <label for="">Nội dung</label>
            <input type="text" name="nd" require>
        </div>
        <div>
            <label for="">Số lần</label>
            <input type="number" name="sl" require>
        </div>
        <button type="submit" name="btsubmit">Submit</button>
    </form>
    <h2>Hiển thị nội dung sau khi nhập</h2>
    <?php
        for($i = 0;$i<$sl;$i++){

    ?>
        <div class="c1"><?php echo $nd?></div>
    <?php
        }
    ?>
</body>
</html>