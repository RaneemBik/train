<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Overall Page Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Login Form Container */
        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        /* Form Title */
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: hotpink;
        }

        /* Input Fields */
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Login Button */
        .login-container input[type="submit"] {
            width: 100%;
            background-color: hotpink;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .login-container input[type="submit"]:hover {
            background-color: deeppink;
        }

        /* Forgot Password Link */
        .login-container a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: gray;
            text-decoration: none;
            font-size: 14px;
        }

        .login-container a:hover {
            color: black;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="loginAction.php" method="post">
            <input type="text" name="txtEmail" placeholder="Email" required>
            <input type="password" name="txtPassword" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
