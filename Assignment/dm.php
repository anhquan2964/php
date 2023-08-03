
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
            <td>Name</td>
            <td>Action</td>
            <td></td>
        </tr>
        <?php
        for($i=0;$i<2;$i++){
            if($i%2==0){ ?>
                <tr class="chan">
                <td>CCTV</td>
                <td><a href="">edit</a></td>
                <td><a href="">remove</a></td>
                </tr>
                 <?php
            }else{ ?>
            <tr class="le">
                <td>COmputer</td>
                <td><a href="">edit</a></td>
                <td><a href="">remove</a></td>
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