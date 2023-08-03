

 <!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="container">
        <div class="form-content">
            <h4>Đăng ký</h4>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <label for="username">Tên đăng nhập</label><br>
                <input type="text" name="username" id="username"><br>
                <label for="password">Mật khẩu</label><br>
                <input type="password" name="password" id="password"><br>
                <label for="confirm_password">Xác nhận mật khẩu</label><br>
                <input type="password" name="confirm_password" id="confirm_password"><br>
                
<?php
$username = $_POST["username"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($username) || strlen($username) < 6) {
        echo "Tên đăng nhập không được để trống và phải có ít nhất 6 kí tự.";
    } elseif (empty($password)) {
        echo "Mật khẩu không được để trống.";
    } elseif ($password != $confirm_password) {
        echo "Mật khẩu xác nhận không khớp.";
    } else {
        // Lưu thông tin đăng ký vào cơ sở dữ liệu hoặc thực hiện các xử lý khác
        echo "Đăng ký thành công!";
    }
}
?>
                <input type="submit" name="register" id="register" value="Đăng ký">
            </form>
            Quay lại <a href="#">Đăng nhập</a>
        </div>
    </div>
</body>
</html>