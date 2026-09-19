<?php
include 'database.php';

$ten = $_POST['ten_nguoi_dung'];
$user = $_POST['ten_dang_nhap'];
$pass = $_POST['mat_khau'];
$quyen = $_POST['quyen'];

$sql = "INSERT INTO user (ten_nguoi_dung, ten_dang_nhap, mat_khau, quyen) 
        VALUES ('$ten', '$user', '$pass', '$quyen')";

if (mysqli_query($conn, $sql)) {
    header("Location: admin.php");
} else {
    echo "Lỗi: " . mysqli_error($conn);
}
?>