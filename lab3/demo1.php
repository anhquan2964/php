<?php
function tinhtien($dongia, $hoahong){
    $tong= $dongia +$hoahong;
    return $tong;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <label for="">1</label>
    <input type="text" name="dongia"><br>
    <label for="">2</label>
    <input type="text" name="hoahong"><br>
    <button name="tinh" type="submit">nhập</button>
    </form>
    <?php
    if(isset($_POST['tinh'])){
        $dongia=$_POST['dongia'];
        $hoahong=$_POST['hoahong'];
        $tong =tinhtien($dongia,$hoahong);
        echo "kết quản" .$tong;
    }
    ?>
</body>
</html>