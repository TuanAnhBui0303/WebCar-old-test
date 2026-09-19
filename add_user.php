<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm người dùng mới</title>
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
            background: red; 
            color: white; 
            border: none; 
            cursor: pointer; 
            border-radius: 5px; 
        }
    </style>
</head>
<body>
    <form action="add_user_process.php" method="POST">
        <h3>Thêm người dùng</h3>
        <input type="text" name="ten_nguoi_dung" placeholder="Tên người dùng" required>
        <input type="text" name="ten_dang_nhap" placeholder="Tên đăng nhập" required>
        <input type="text" name="mat_khau" placeholder="Mật khẩu" required>
        <select name="quyen">
            <option value="Khách hàng">Khách hàng</option>
            <option value="Quản trị">Quản trị</option>
        </select>
        <button type="submit">Lưu người dùng</button>
    </form>
</body>
</html>