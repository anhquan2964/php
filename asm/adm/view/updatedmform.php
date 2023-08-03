<div class="main">
    <h2>cap nhap danh muc</h2>
    <?php
    echo var_dump($_POST) ;
    ?>
    <form action="" method="POST">
        <input type="text" name="tendm" value="<?php echo $kqone[0]['tendm'];?>" >
        <input type="submit" name="capnhap" value="cap nhap">
    </form>
    <br>
    <table border="1px">
        <tr>
            <th>STT</th>
            <th>Ten danh muc</th>
            <th>uu tien </th>
            <th>hien thi </th>
            <th>hanh dong</th>
        </tr>
        <?php
        if(isset($kq) && (count($kq)>0)){
            $i=1;
            foreach ($kq as $dm) {
                echo'
            <tr>
                <th>'.$i.'</th>
                <th>'.$dm['tendm'].'</th>
                <th>'.$dm['uutien'].'</th>
                <th>'.$dm['hienthi'].'</th>
            <th><a href="index.php?act=updatedmform&id='.$dm['id'].'">sua</a>|<a href="index.php?act=deldm&id='.$dm['id'].'">xoa</a></th>
        </tr>';
            }
            $i++;
        }
        ?>
        
    </table>
</div>