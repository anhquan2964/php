<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign.css">
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]) ?>" method="POST"  id="form">
        <div>
            <h1>Sign Up</h1>
        </div>
        <label for="">Tên đăng nhập</label><br>
        <input type="text" name="usre" id="usre" placeholder="Tên đăng nhập"><br>
        <label for="">Mật khẩu</label><br>
        <input type="password"  name="password" placeholder="password"><br>
        <label for="">Nhập lại mật khẩu</label><br>
        <input type="password"  name="password2" placeholder="password"><br>
        <label for="">Họ tên của bạn</label><br>
        <input type="text" id="name" name="name" placeholder="Họ tên bạn"><br>
        <label for="">số điện thoại</label><br>
        <input type="text" name="sdt" placeholder="số điện thoại"><br>
        <label for="">Giới tính</label>
        <select id="tuychon" name="gioitinh">
            <option value="tuychon1">Nam</option>
            <option value="tuychon2">Nữ</option>
        </select><br>
        <span id="hienthi">
        <?php
        if(isset($_POST["usre"]) && isset($_POST["password"]) && isset($_POST["password2"]) && isset($_POST["name"])  && isset($_POST["sdt"]) && isset($_POST["gioitinh"]) ){
            $usre=$_POST["usre"];
            $password=$_POST["password"];
            $password2=$_POST["password2"];
            $name=$_POST["name"];
            $sdt=$_POST["sdt"];
            $gioitinh=$_POST["gioitinh"];
            
            if(empty($usre) || strlen($usre)<6){
                echo"Tên người dùng trống hoặc không ít hơn 6 ký tự";
            }elseif(empty($password)){
                echo"Mật khẩu trống";
            }elseif($password2 != $password){
                echo"Mật khẩu không khớp";
            }elseif(!ctype_upper($name)){
                echo "Viết hoa họ tên";
            }elseif(strlen($sdt)== 10){
                echo"không đúng định dạng";
            }else{
                echo "đăng nhập thành công";
            }


        }
    ?>
        </span>
        <hr>
        <input type="submit" value="Log in" id="login"> <br>
        <input type="button" value="sign up" id="sign">
        </form>
    </div>
   
</body>
</html>