<?php
    //sử dụng mysqli
    //$conn = mysqli_connect($servername, $username, $password,$database_name);
   $conn = null;
    function ConnectDb(){
        try
        {
            $conn = new PDO("mysql:host=localhost;dbname=D13CNPM;charset=utf8","root","");
            $conn->query("SET NAMES UTF8");//thiết lập làm việc với unicode utf8(quan trọng)
        }
        catch(PDOException $ex)
        {
            echo "<p>" . $ex->getMessage() . "</p>";
            die ("<h3> LỖI KẾT NỐI CSDL</h3>");
        }
    }
    return $conn;//trả về đối tượng PDO
?>
