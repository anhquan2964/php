<?php
     include 'connect2.php';

     if(isset($_POST['submit'])){
         //lấy giá trị từ form
         $id =$_POST['id'];
         $tensp =$_POST['tensp'];
         $mota =$_POST['mota'];
         $gia =$_POST['gia'];
         $query= "INSERT INTO tbl_sanpham (tensp,mota,gia) VALUES ('$tensp','$mota','$gia')";
         $result=mysqli_query($conn,$query);

         if( $result){
            echo "thêm dữ liệu thành công";
            
        }else{
            echo "thất bại1" .mysqli_error($conn);
        }
        mysqli_close($conn);
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
    <a href="sanpham.php">Danh sách sản phẩm</a>
    <h3>Thêm sản phẩm</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="id" id="id">
        <label for="tensp">Tên sản phẩm</label><br>
        <input type="text" name="tensp" id="tensp"  required><br>
        <label for="mota">Mô tả</label><br>
        <textarea name="mota" id="mota" cols="30" rows="5"required ></textarea><br>
        <label for="gia">Giá</label><br>
        <input type="number" name="gia" id="gia" required><hr>
        <input type="submit" value="Cập nhật" name="submit">
        
    </form>


</body>
</html>
<?php
   
?>