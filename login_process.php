<?php
session_start(); 
include 'database.php'; 

if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // kiểm tra tài khoản và mật khẩu
    $sql = "SELECT * FROM user WHERE ten_dang_nhap = '$user' AND mat_khau = '$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        // Lưu thông tin 
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['ten_nguoi_dung'];
        $_SESSION['user_role'] = $row['quyen'];

        // KIỂM TRA QUYỀN VÀ CHUYỂN HƯỚNG 
        if ($row['quyen'] == 'Quản trị') {
            header("Location: admin.php");
        } else {
            header("Location: index.php");
        }
        exit();
    } else {
        echo "<script>alert('Sai tài khoản hoặc mật khẩu!'); window.location='login.php';</script>";
    }
}
?>