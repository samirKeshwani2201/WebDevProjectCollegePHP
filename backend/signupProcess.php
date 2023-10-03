<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdproj";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST["email"];
    $pass = $_POST["password"];

    // store the email in session to get access to the stu_id later in registration

    $sql = "INSERT INTO `student_login`(`email`, `pass`) VALUES ('$email','$pass' )";

    if ($conn->query($sql) === TRUE) {
        // $_SESSION["email"] = $email; 
        ?>
        <script>alert("Registration successful");
            window.location.href = "../login.php";
        </script>
        <?php

    }
    $conn->close();
} catch (mysqli_sql_exception $e) {

    ?>
    <script>alert("User with this email already exists try other!");
        window.location.href = "../signup.php";</script>
    <?php
}
?>