<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <?php
        for($i = 0;$i<5;$i++){

    ?>
        <div class="c1">Hello Php</div>
    <?php
        }
    ?>
</body>
</html>