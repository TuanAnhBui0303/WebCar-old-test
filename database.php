<?php
$host = "localhost";
$user = "root";     
$pass = "";        
$dbname = "toyota_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>