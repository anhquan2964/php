<?php
    function updatedm($id,$tendm){
        $conn=connectdtb();
        $sql = "UPDATE tbl_danhmuc SET $tendm='".$tendm."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }

    function getonedm($id){
        $conn=connectdtb();
        $stmt = $conn->prepare("SELECT * FROM  tbl_danhmuc where id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stmt->fetchAll();
        return $kq;
    }
function deldm($id){
    $conn=connectdtb();
    $sql = "DELETE FROM  tbl_danhmuc  WHERE id=".$id;
    // use exec() because no results are returned
    $conn->exec($sql);
}
    function getall_dm(){
        $conn=connectdtb();
        $stmt = $conn->prepare("SELECT * FROM  tbl_danhmuc");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stmt->fetchAll();
        return $kq;
    }
?>