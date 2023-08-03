

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
    <div class="form-content">
       <h4>Login</h4>
       <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]) ?>" method="POST">
       <label for="user">User Name</label><br>
        <input type="text" name="user" id="user"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br>
        
        <span class="Loi">
        <?php

if (isset($_POST["user"]) && isset($_POST["password"])) {
    $user = $_POST["user"];
    $pass = $_POST["password"];
    
    if (empty($user) || strlen($user) < 6 ){
        echo "User name không được để trống và nhỏ hơn 6 kí tự";
    } else if (empty($pass)) {
        echo "Password không được để trống";
    } else {
        echo "Chào mừng  "  .  $user;    
    }
} 
 
?> </span>

        <input type="submit" name="login" id="login">
       </form>
       Click Here To <a href="#">Register</a>
    </div>
</div>
</body>
</html>