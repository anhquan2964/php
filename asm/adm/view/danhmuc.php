<div class="main">
    <h2>danh muc </h2>
    <form action="" method="POST">
        <input type="text" name="tendn" >
        <input type="submit" name="themmoi" value="themmoi">
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
     // var_dump($kq);
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