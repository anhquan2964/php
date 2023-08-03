<?php
    if(isset($_POST['submit'])){
        $taget_dir = "upload";
        //đường dẫn đén file lưu trữ file
        $taget_file= $taget_dir . basename($_FILES["fileToUpload"]["name"]);
        //gán trạng thái upload file =1(thành công)
        $upLoandok=1;
        //lấy định dạng ảnh
        $imgFileTyle=strtolower(pathinfo($taget_file,PATHINFO_EXTENSION));
        //kiểm tra xem file đã tồn tại hay chưa
        if(file_exists($taget_file)){
            echo "file đã tồn tại";
            //bật trạng thái upoad file khi báo lỗi
            $upLoandok=0;
        }
        //kiểm tra kích thước của file
        if($_FILES['fileToUpload']['size']>500000){
            echo "file quá lơn";
            $upLoandok=0;
        }
        // kiểm tra định dạng 
        if($imgFileTyle != "jpg" &&$imgFileTyle != "png" &&$imgFileTyle != "jpeg"&&$imgFileTyle != "gif"  ){
            echo "không đúng định dạng ";
            $upLoandok=0;
        }
        if($upLoandok===0){
            echo "tải lên không hoàn tất";
        }else{
            //di chuyển từ thư mục tạm thời đến thư mục chính
            if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$taget_file)){
                echo "file" . htmlspecialchars(basename($_FILES['fileToUpload']['name']))."dược tải lên thành công";
            }else{
                echo "có lỗi ";
            }
        }
        
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
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload file" name="submit">
    </form>
</body>
</html>