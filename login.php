<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="util/login.css">
</head>

<body>
    <div class="container">
        <form class="login" action="./backend/loginProcess.php" method="post">
            <h2>User Login</h2>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email Address" id="username">
            </div>
            <div class="input-box">
                <input type="text" name="password" placeholder="Password" id="password">
            </div>
            <div class="row">
                <div class="remember-cb">
                    <input type="checkbox" name="" id="cb">
                    <label for="cb">Remember Me</label>
                </div>
                <a style="color:#000;cursor: pointer;" href="forgot_pass.php"><label for="">Forgot Password?</label></a>
            </div>

            <div class="button">
                <button style=" cursor: pointer;">Click to Login</button>
            </div>

            <p class="no-c">Not a member yet? <a href="signup.php">Create your Account</a></p>
        </form>
    </div>
</body>

</html>