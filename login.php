<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/login.css">
</head>
<body>
    <form action="" method="POST">
        <div class="head">
            <h1>Sign In to SAFAR!</h1> 
            <p>Self-Drive Car Rental</p>
        </div> <br>
        <div class="warpper">
            <div id="input_box">
                <p id="ema">Email Id</p>
                <input type="email" placeholder="Email" required>
                <p id="emal" >Password</p>
                <input type="password" placeholder="Password" required>
                <a id="forgt" href="#">Forgot Password?</a>
                <button type="submit" class="btn_primary" href="#">Login</button>
                <div class="log">
                    <p>Don't have an account? <a href="/html/signup.html">Signup</a></p>
                </div>
            </div>
        </div>
    </form>
</body>
</html>