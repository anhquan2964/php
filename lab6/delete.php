<?php
    include 'connect2.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $sql="DELETE FROM tbl_sanpham WHERE id='$id'";
        $result=mysqli_query($conn,$sql);

        if($result){
            echo "xóa thành công";
            header("location: sanpham.php");
        }else{
            echo "có lỗi xẩy ra".mysqli_error($conn);
            print "<a href='sanpham.php'>Danh sách sản phẩm</a>";
        }
        mysqli_close($conn);
    }else {
        echo "không tìm thấy sản phẩm dể xóa";
        print "<a href='sanpham.php'>Danh sách sản phẩm</a>";
    }
?>