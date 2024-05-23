<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="sign_up.css">
  </head>
    <body>
        <form action="connect.php" method ="POST">
            <div class="signup">
                <h1><b>Sign Up to SAFAR!</b></h1> <br>
                <p>Self-Drive Car Rental</p></br>
            </div> <br>
            <div class="warpper">
                 <div id="input_box">
                    <p id="too">Full Name</p>
                    <input type="text" name="Fname" placeholder="Full Name" required>
                </div>

                <div id="input_box">
                    <p id="tom">Email Id</p>
                    <input type="email" name="email" placeholder="Email" required> 
                </div>

                <div id="input_box">
                    <p id="ton">Password</p>
                    <input type="password" name="password" placeholder="Password" required> 
                </div> 

                <div>
                    <label >
                        <input id="box" type="checkbox"  required>
                        I agree with the Terms of Service and <a id="lpol" href=" #">Security Policy</a> 
                    
                    </label>
                </div> 
                <br>
                <button type="submit" class="btn" href="/html/login.html">Create Account</button>
                <div class="login-link">
                    <p>Already have an account? <a class="llog" href="/college_pro/login.html">Login</a></p>
                </div>
            </div>  
        </form> 
    </body>
</html>