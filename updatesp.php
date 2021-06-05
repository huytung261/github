<?php
header('Content-Type: text/html; charset=utf-8');
include ('config.php');

if(isset($_GET['update'])){
    $id = $_GET['update'];
    $newname = $_POST['newname'];
    $newprice = $_POST['newprice'];
    $newsoluong = $_POST['newsoluong'];
    $sql_update = "UPDATE product SET name='$newname', price='$newprice', soluong='$newsoluong' WHERE idsp='$id' ";
    mysqli_query($conn, $sql_update);
    echo '<script language="javascript">alert("Sửa thành công!"); window.location="qlsanpham.php";</script>';
    // header("location: qlsanpham.php");
}
?>