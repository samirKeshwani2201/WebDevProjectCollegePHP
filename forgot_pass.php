<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome Icons  -->
    <link rel="stylesheet" href="util/forgot_pass.css"/>

    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Forgot Password UI Using CSS - @code.scientist x @codingtorque</title>
</head>

<body>
    <form action="backend/forgot_pass.php" method="post">

        <div class="card">
            <p class="lock-icon"><i class="fas fa-lock"></i></p>
            <h2>Forgot Password?</h2>
            <p>You can reset your Password here</p>
            <input type="text" class="passInput" placeholder="Email address">
            <button>Send My Password</button>
        </div>
    </form>
</body>

</html>