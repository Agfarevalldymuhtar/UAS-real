<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
       .container {
            max-width: 300px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
       .login-form {
            margin-top: 20px;
        }
       .login-form label {
            display: block;
            margin-bottom: 10px;
        }
       .login-form input[type="text"], .login-form input[type="password"] {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
       .login-form input[type="submit"] {
            width: 100%;
            height: 40px;
            background-color: #337ab7;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
       .login-form input[type="submit"]:hover {
            background-color: #23527c;
        }
       .register-link {
            margin-top: 10px;
            text-align: center;
        }
       .register-link a {
            color: #337ab7;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form class="login-form">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Username">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password">
            <input type="submit" value="Login">
            <p class="register-link"><a href="register">Belum punya akun? Daftar disini</a></p>
        </form>
    </div>
</body>
</html>
