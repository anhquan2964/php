<?php
    $nhan_vien = array("Đông","Tây","Nam","Bắc");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .chan{
            background-color:yellow;
        }
        .le{
            background-color:red;
        }
    </style>
</head>
<body>
    <table border="1px">
        <tr>
            <td>stt</td>
            <td>tên</td>
            <td></td>
        </tr>
        <?php
         for($i=0;$i<sizeof($nhan_vien);$i++){
            $ten=$nhan_vien[$i];
            if($i%2==0){ ?>
                <tr class="chan">
                <td><?php print($i);?></td>
                <td><?php print($nhan_vien[$i]);?></td>
                <td><img onclick="info('<?php echo($ten)?>')" src="img/icon.png"width="50px"; alt=""></td>
                </tr>
                 <?php
            }else{ ?>
                <tr class="le">
                <td><?php print($i);?></td>
                <td><?php print($nhan_vien[$i]);?></td>
                <td><img onclick="info('<?php echo($ten)?>')" src="img/icon.png"width="50px"; alt=""></td>
                </tr>
                   <?php
            }
        ?>
<?php
    }
        ?>
    </table>
    <script>
        function info(ten){
            alert(ten);
        }
    </script>
</body>
</html>