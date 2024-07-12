<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
      .register-form {
            margin-top: 20px;
        }
      .register-form label {
            display: block;
            margin-bottom: 10px;
        }
      .register-form input[type="text"],.register-form input[type="email"],.register-form input[type="password"] {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
      .register-form input[type="submit"] {
            width: 100%;
            height: 40px;
            background-color: #337ab7;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
      .register-form input[type="submit"]:hover {
            background-color: #23527c;
        }
      .login-link {
            margin-top: 10px;
            text-align: center;
        }
      .login-link a {
            color: #337ab7;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form class="register-form">
            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Name">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" placeholder="Confirm Password">
            <input type="submit" value="Register">
            <p class="login-link">Sudah punya akun? <a href="/login">Login</a></p>
        </form>
    </div>
</body>
</html>
