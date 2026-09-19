<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập - Toyota HCM</title>
    <style>
        body { 
            background-color: #1a1a1a; 
            font-family: Arial, sans-serif; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
        }
        .login-container { 
            background: white; 
            padding: 40px; 
            border-radius: 8px; 
            border: 2px solid #ff0000; 
            width: 350px; 
            text-align: center; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.5); 
        }
        h2 { 
            color: #ff0000; 
            text-transform: uppercase; 
            margin-bottom: 30px; 
            letter-spacing: 2px; 
        }
        .form-group { 
            text-align: left; 
            margin-bottom: 15px; 
        }
        .form-group label { 
            display: block; 
            font-size: 13px; 
            color: #666; 
            margin-bottom: 5px; 
        }
        .form-group input { 
            width: 100%; 
            padding: 10px; 
            border: 1px solid #ddd; 
            border-radius: 4px; 
            box-sizing: border-box; 
        }
        .btn-login { 
            background-color: #ff0000; 
            color: white; 
            border: none; 
            width: 100%; 
            padding: 12px; 
            border-radius: 4px; 
            cursor: pointer; 
            font-weight: bold; 
            margin-top: 10px; 
            transition: 0.3s; 
        }
        .btn-login:hover { 
            background-color: #cc0000; 
        }
        .register-link { 
            margin-top: 15px; 
            font-size: 13px; 
        }
        .register-link a { 
            color: #ff0000; 
            text-decoration: none; 
        }
    </style>
</head>
<body> 
    <div class="login-container">
        <h2>Đăng Nhập</h2>
        <form action="login_process.php" method="POST">
            <div class="form-group">
                <label>Tài khoản</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="btn-login">Đăng nhập</button>
        </form>
    </div>
</body>
</html>
