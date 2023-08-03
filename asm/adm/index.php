<?php
    session_start();
    ob_start();
    include './model/connectdtb.php';
    include './model/danhmuc.php';
    connectdtb();
    include 'view/header.php';
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'danhmuc':
                $kq=getall_dm();
                include 'view/danhmuc.php';
                break;
            case 'deldm':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    deldm($id);
                }
                $kq=getall_dm();
                include 'view/danhmuc.php';
                break;
            case 'updatedmform':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $kqone=getonedm($id);
                    $kq=getall_dm();
                    include 'view/updatedmform.php';
                }
                if(isset($_POST['id'])){
                    $id=$_POST['id'];
                    $tendm=$_POST['tendm'];
                    updatedm($id,$tendm);
                    $kq=getall_dm();
                    include 'view/danhmuc.php';
                }
                    
                    break;
            case 'sanpham':
                include 'view/sanpham.php';
                break;
            case 'taikhoan':
                include 'view/taikhoan.php';
                break;
            case 'donhang':
                include 'view/donhang.php';
                break;
            default:
            include 'view/home.php';
                break;
        }

    }else{
    include 'view/home.php';
    }
    include 'view/footer.php';
    

?>