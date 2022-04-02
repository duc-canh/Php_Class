<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function kiemtra(){
            user=document.getElementById('username');
            pass = document.getElementById('pass');
            if(user.value=="" || pass.value==""){
                alert("chưa nhập user hoặc pass");
                return false;
            }
            alert("ok");
            return true;
        }
    </script>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form  action="xuly2.php" method="post" onsubmit="return kiemtra()">
        <label for="">Username</label>
        <input name="user" type="text" id="username">
        <label for="">Password</label>
        <input type="password" name="password" id="pass">
        <button type="submit">Submit</button>
    </form>
</body>
</html>