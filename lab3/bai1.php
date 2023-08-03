<?php include'xulychuoi.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="<?php echo $_SERVER["PHP_SELF"]; ?>"  method="POST">
        <label for="">Nhập</label><br>
        <input type="text" name="nhap" id="nhap"> <br> <span>kết quả:<?php echo $kq ?></span><br>
        <input type="submit" value="xu ly chuoi">
    </form>
</body>
</html>