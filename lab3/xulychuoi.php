<?php
    $kq="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nhap= $_POST["nhap"];
        $kq=xuly($nhap);
    }
    function xuly($ch){
        $s=chunk_split($ch,2,":");
        return substr($s,0,strlen($s)-1);
    }
?>
