<?php
    include 'connect2.php';

    if(isset($_POST['submit'])){
        //lấy giá trị từ form
        $id =$_POST['id'];
        $tensp =$_POST['tensp'];
        $mota =$_POST['mota'];
        $gia =$_POST['gia'];
        
        $sql=" UPDATE tbl_sanpham SET tensp='$tensp',mota='$mota', gia='$gia' WHERE id='$id' ";
        $result=mysqli_query($conn,$sql);
        if( $result){
            echo "thêm dữ liệu thành công";
            echo "<br>".$tensp."<br>";
            echo $mota ."<br>";
            echo $gia ."<br>";
        }else{
            echo "thất bại1";
        }
        mysqli_close($conn);
    }elseif (isset($_GET['id'])) {
      
        $id =$_GET['id'];
          // truy vấn sản phẩm dựa trên id
        $query="SELECT *FROM  tbl_sanpham WHERE id='$id'";
        $result=mysqli_query($conn,$query);
        if($result){
           $row=mysqli_fetch_assoc($result);
            $tensp=$row['tensp'];
            $mota=$row['mota'];
            $gia=$row['gia'];
        }else{
            echo "có lỗi xảy ra".mysqli_error($conn);
        }
        mysqli_close($conn);
    }else{
        echo"không tìm thấy sản phẩm để cập nhập";
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
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
        <label for="tensp">Tên sản phẩm</label><br>
        <input type="text" name="tensp" id="tensp" value="<?php echo $tensp; ?>"  required><br>
        <label for="mota">Mô tả</label><br>
        <textarea name="mota" id="mota" cols="30" rows="5" value="<?php echo $mota; ?>" required ></textarea><br>
        <label for="gia">Giá</label><br>
        <input type="number" name="gia" id="gia" value="<?php echo $gia; ?>"  required><hr>
        <input type="submit" value="Cập nhật" name="submit">
    </form>


</body>
</html>
<?php
   
?>