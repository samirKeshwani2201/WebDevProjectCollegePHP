<?php
session_start();
$name = $_SESSION['username'];
$email = $_SESSION['user_email'];

require_once "DBO/dbconnect.php";
$user_id = $_SESSION['user_id'];
$user_registration_check = $con->query("select * from users where id = '$user_id'");
if (!$user_registration_check->fetch_assoc()['registration']) {
    ?>
    <script>alert("User Details are Not Registered!"); window.location.href = "index.php";</script>
    <?php
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">

        <form class="shadow w-450 p-3" action="backend/profileEditProcess.php" method="post"
            enctype="multipart/form-data">

            <h4 class="display-4  fs-1">Edit Profile</h4><br>

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Profile Picture</label>
                <input type="file" class="form-control" name="pp">
                <!-- <img src="upload/" class="rounded-circle" style="width: 70px"> -->
                <!-- <input type="text" hidden="hidden" name="old_pp"> -->
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary">Home</a>
        </form>
    </div>

</body>

</html>