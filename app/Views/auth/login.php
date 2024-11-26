<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f2f2f2;
        }
        
        .container {
            display: flex;
            width: 80%;
            height: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .login-form {
            width: 35%;
            background: linear-gradient(to bottom, #f8a385, #f08080);
            padding: 30px;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .login-form h1 {
            color: #e8585b;
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .login-form hr {
            width: 50%;
            height: 3px;
            background: #e8585b;
            margin: 10px 0;
            border: none;
        }
        
        .login-form label {
            color: #333;
            font-weight: bold;
            margin-top: 10px;
            align-self: flex-start;
        }
        
        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        
        .remember-me label {
            color: #333;
            margin-left: 5px;
        }
        
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #e8585b;
            color: #fff;
            border: none;
            border-radius: 4px;
            margin-top: 10px;
            cursor: pointer;
        }

        .register-button {
            margin-top: 15px;
            color: #e8585b;
            background: none;
            border: none;
            font-size: 14px;
            cursor: pointer;
            text-decoration: underline;
        }

        .register-button:hover {
            color: #d0484a;
        }
        
        .image-side {
            width: 65%;
            background: url('https://images.pexels.com/photos/804130/pexels-photo-804130.jpeg')no-repeat center center/cover;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .overlay-text {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
        }
        
        .overlay-text h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .overlay-text p {
            font-size: 16px;
        }
        .error-message {
            background-color: red;
            width: 100%;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 10px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h1>Login Now</h1>

            <hr>
            <?php if (isset($error)) : ?>
            <div class="tes"><?= $error ?>:Account has already been registered.</div>
        <?php endif; ?>
            <form action="/login" method="post">
                <label for="username">EMAIL</label>
                <input type="text"  name="email" required>
                
                <label for="password">PASSWORD</label>
                <input type="password" name="password" required>
                
                <div class="remember-me">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember Me</label>
                </div>
                
                <button type="submit">Submit</button>
                
                <!-- Register Button -->
                <button type="button" class="register-button" onclick="window.location.href='register.html'"> <a href="/register">Don't have an account? Register</a></button>
            </form>
        </div>
        <div class="image-side">
            <div class="overlay-text">
                <h2>This is Second Slide</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</body>
</html>