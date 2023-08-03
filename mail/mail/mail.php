<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
        include '../mail/process_send_mail.php';
        if(isset($_POST['submit'])){
            //Lấy các giá trị từ form
            $to = $_POST['to'];
            $subject = $_POST ['subject'];
            $message = $_POST ['message'];
            //Gửi email
            if(send_email($to,$subject,$message)){
                echo "Đã gửi email thành công";
            }else {
                echo "Gửi email thất bại";
            }
        }
    ?>
    <h2>form gởi mail</h2>
    <form action=""method="POST">
    <label for="to">người nhận</label><br>
    <input type="text" name="to" id="to" require> <br><br>
    <label for="subject">tiêu đề</label><br>
    <input type="text" name="subject" id="subject" require><br>
    <label for="message">Nội dung</label><br>
    <textarea name="message" id="message" cols="30" rows="5"require></textarea><br><br>
    <input type="submit" value="gởi mail" name="submit">
    </form>
</body>
</html>