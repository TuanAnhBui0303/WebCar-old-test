<?php
session_start();
include 'database.php';

// Kiểm tra bảo mật
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'Quản trị') {
    header("Location: login.php");
    exit();
}

// Lấy danh sách người 
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý người dùng - Admin</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            padding: 20px; 
            background-color: #f4f4f4; 
        }
        .container { 
            background: white; 
            padding: 20px; 
            border-radius: 5px; 
            box-shadow: 0 0 10px rgba(0,0,0,0.1); 
        }
        h2 { 
            margin-top: 0; 
            border-bottom: 2px solid #eee; 
            padding-bottom: 10px; 
        }
        /* Thêm  */
        .btn-add { 
            background-color: red; 
            color: white; 
            padding: 8px 15px; 
            text-decoration: none; 
            border-radius: 20px; 
            display: inline-block; 
            margin-bottom: 15px; 
            font-size: 14px; 
        }
        /* Bảng */
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 10px; 
        }
        table, th, td { 
            border: 1px solid #ddd; 
        }
        th { 
            background-color: #f9f9f9; 
            padding: 12px; 
            text-align: left; 
        }
        td { padding: 10px; }
 
        /* Sửa, Xóa */
        .btn-edit, .btn-delete { 
            color: white; 
            padding: 5px 15px; 
            text-decoration: none; 
            border-radius: 15px; 
            font-size: 13px; 
            margin-right: 5px; 
            display: inline-block; 
        }
        .btn-edit { background-color: red; }
        .btn-delete { background-color: red; }
        
        .action-cols { text-align: center; }
    </style>
</head>
<body>

<div class="container">
    <h2>Danh sách người dùng</h2>
    
    <a href="add_user.php" class="btn-add">Thêm mới</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên người dùng</th>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Quyền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['ten_nguoi_dung']; ?></td>
                <td><?php echo $row['ten_dang_nhap']; ?></td>
                <td><?php echo $row['mat_khau']; ?></td>
                <td><?php echo $row['quyen']; ?></td>
                <td class="action-cols">
                    <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="btn-edit">Sửa</a>
                    <a href="delete_user.php?id=<?php echo $row['id']; ?>" 
                       class="btn-delete" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>