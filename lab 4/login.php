<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form-log.css">
</head>
<body>
    <div class="container">
    
    <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]) ?>" method="POST" id="form-log">
            <div class="name">
                <h1>log in</h1>
            </div>
           <span>
           <?php
                if(isset($_POST["usre"] )&& isset($_POST["password"])){
                    echo "usre".$usre;
                    echo "pass".$password;
                }
            ?>
           </span>
        <label for="">Usrename</label><br>
        <input type="text" name="usre" id="usre" placeholder="Email hoặc Số điện thoại"><br>
        <label for="">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Password"><br>
        <label for="ghinho">Ghi nhớ</label>
        <input type="checkbox" id="ghinho" name="ghinhotuychon"><hr>
        <span id="hienthi">
        <?php
        if(isset($_POST["usre"] )&& isset($_POST["password"])){
            $usre =$_POST["usre"];
            $password=$_POST["password"];

            if(empty($usre) || strlen($usre)<6){
                echo"Tên người dùng trống hoặc không ít hơn 6 ký tự";
            }elseif(empty($password)){
                echo"Mật khẩu trống";
            }else{
                echo"Đăng nhập thành công";
            }
        }
?>

        </span> <br>
        <a href="" id="quenmatkhau">Quên mật khẩu</a>
        <input type="submit" value="Log in" id="login"> <br>
        <input type="button" value="sign up" id="sign">
    </form>
    </div>
    

</body>
</html>