<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Câu lệnh xóa theo ID
    $sql = "DELETE FROM user WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: admin.php");
    } else {
        echo "Lỗi khi xóa: " . mysqli_error($conn);
    }
}
?>