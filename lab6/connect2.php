<?php
    $server='localhost';
    $user='root';
    $password='';
    $dbname='sanpham';
    $conn=mysqli_connect($server,$user,$password,$dbname);
    if(!$conn){
        echo "kết nối thất bại";
    }else{
        echo "đã truy cập vào mysql ";
    }

?>