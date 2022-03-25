
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Làm quen với php</h3>
    <?php
        $n = $_REQUEST["solan"];
        echo "<h4 style=\"color:red\">Hello from Php</h4>\n";
        for($i = 0;$i<$n;$i++){
            echo "<p>Dòng thứ $i</p>";
        }
    ?>
</body>
</html>


