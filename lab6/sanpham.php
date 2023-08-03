<?php
    include 'connect2.php';
    $sql= "SELECT * FROM tbl_sanpham";
    $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
</head>
<body>
    <h2>Bản sản phẩm</h2>
    <a href="themsp.php">Thêm sản phẩm</a>
    <table border="1px">

        <tr>
            <th>id</th>
            <th>Tên sản phẩm</th>
            <th>Mô tả</th>
            <th>Giá</th>
            <th></th>
        </tr>
        <?php
        
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["tensp"] . "</td>";
                echo "<td>" . $row["mota"] . "</td>";
                echo "<td>" . $row["gia"] . "</td>";
                echo "<td>";
                echo "<a href='updatesp.php?id=".$row['id']. "'>Sửa</a>";
                echo "<a href='delete.php?id=".$row['id']. "'>Xóa</a>";
                
                "</td>";
                echo "</tr>";
                // Thêm các trường dữ liệu khác tương ứng với cấu trúc của bảng
            }
        
        ?>
    </table>
</body>
</html>
<?php
    mysqli_close($conn);
?>