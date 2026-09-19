<?php
include 'database.php';
$id = $_GET['id'];
// Lấy dữ liệu cũ của người này
$result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
$row = mysqli_fetch_assoc($result);

// Nếu bấm nút Cập nhật
if (isset($_POST['btn_update'])) {
    $ten = $_POST['ten_nguoi_dung'];
    $user = $_POST['ten_dang_nhap'];
    $pass = $_POST['mat_khau'];
    $quyen = $_POST['quyen'];

    $sql_update = "UPDATE user SET ten_nguoi_dung='$ten', ten_dang_nhap='$user', mat_khau='$pass', quyen='$quyen' WHERE id=$id";
    
    if (mysqli_query($conn, $sql_update)) {
        header("Location: admin.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sửa người dùng</title>
    <style>
        body { 
            font-family: Arial; 
            padding: 50px; 
            display: flex; 
            justify-content: center; 
        }
        form { 
            width: 300px; 
            padding: 20px; 
            border: 1px solid #ccc; 
            border-radius: 10px; 
        }
        input, select { 
            width: 100%; 
            padding: 10px; 
            margin: 10px 0; 
            box-sizing: border-box; 
        }
        button { 
            width: 100%; 
            padding: 10px; 
            background: blue; 
            color: white; 
            border: none; 
            cursor: pointer; 
            border-radius: 5px; 
        }
    </style>
</head>
<body>
    <form method="POST">
        <h3>Sửa thông tin</h3>
        <input type="text" name="ten_nguoi_dung" value="<?php echo $row['ten_nguoi_dung']; ?>">
        <input type="text" name="ten_dang_nhap" value="<?php echo $row['ten_dang_nhap']; ?>">
        <input type="text" name="mat_khau" value="<?php echo $row['mat_khau']; ?>">
        <select name="quyen">
            <option value="Khách hàng" <?php if($row['quyen']=='Khách hàng') echo 'selected'; ?>>Khách hàng</option>
            <option value="Quản trị" <?php if($row['quyen']=='Quản trị') echo 'selected'; ?>>Quản trị</option>
        </select>
        <button type="submit" name="btn_update">Cập nhật</button>
    </form>
</body>
</html>