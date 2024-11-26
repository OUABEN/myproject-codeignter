<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
            width:100% ;
        }

        .container {
            display: flex;
            width: 85%; /* Change to 90% to better fit different screen sizes */
            max-width: 1200px; /* Set a max-width to limit stretching on large screens */
            height: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px; /* Optional: Add rounded corners */
            overflow: hidden; /* Ensure overflow is hidden for better aesthetics */
        }

        .login-form {
            width: 35%;
            background: linear-gradient(to bottom, #f8a385, #f08080);
            padding: 30px;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: right;
            justify-content: center;
        }

        .login-form h2 {
            color: #e8585b;
            font-size: 24px;
            margin-bottom: 10px;
            position: relative;
            left :100px;
        }

        .login-form hr {
            width: 50%;
            height: 3px;
            position: relative;
            left :70px;
            background: #e8585b;
            margin: 10px 0;
            border: none;
        }

        .login-form input[type="text"],
        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-form input:focus {
            border-color: #e8585b;
            outline: none;
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

        .login-form a {
            margin-top: 15px;
            color: #e8585b;
            text-decoration: underline;
            cursor: pointer;
            position: relative;
            left :90px;
        }

        .login-form a:hover {
            color: #d0484a;
        }

        .image-side {
            width: 65%;
            background: url('https://images.pexels.com/photos/804130/pexels-photo-804130.jpeg')no-repeat center center/cover;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: left;
        }

        .overlay-text {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            width: 800px;
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
            <h2>Register</h2>
            <hr>
            <?php if (isset($validation)) : ?>
                <div class="error-message"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form action="/register" method="post">
                <input type="text" name="nom" placeholder="Name" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <button type="submit" id="btn">Register</button>
            </form>
            <a href="/login">Already have an account? Login</a>
        </div>
        <div class="image-side">
            <div class="overlay-text">
                <h2>Welcome to Our Registration</h2>
                <p>Join us today to unlock exclusive features!</p>
            </div>
        </div>
    </div>
</body>
<script>
    let mybtn = document.getElementById('btn');
   
    mybtn.onclick = function(){
        alert("votre inscription est réussie.");
    }
</script>
</html>


