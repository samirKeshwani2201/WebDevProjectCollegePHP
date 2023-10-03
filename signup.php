<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <link rel="stylesheet" href="util/login.css">
</head>

<body>
    <div class="container">
        <form class="login" action="#" method="post">
            <h2>Sign Up</h2>
            <div class="input-box">
                <input type="text" name="name" placeholder="Full Name" id="f_name">
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email Address" id="email">
            </div>
            <div class="input-box">
                <input type="text" name="password" placeholder="Password" id="password">
            </div>
            <div class="input-box">
                <input type="text" name="cnf_password" placeholder="Repeat Password" id="repeat_password">
            </div>
            <div class="button">
                <button>Click to Sign Up</button>
            </div>

            <p class="no-c">Already have an Account? <a href="login.php">Sign In</a></p>
        </form>
    </div>
</body>

</html>