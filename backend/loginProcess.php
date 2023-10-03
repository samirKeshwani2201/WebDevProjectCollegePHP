<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("./dbconnect.php");
    $email = $_POST["email"];
    $pass = $_POST["password"];
    if (empty($email) || empty($pass)) {
        ?>
        <script>alert("Both username/email and password are required.");
            window.location.href = "../login.php";
        </script>
        <?php
    } else {
        $sql = "SELECT * FROM student_login WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            if ($email == $row["email"] && $pass == $row["pass"]) {
                $_SESSION["isLogin"] = 1;
                $_SESSION["email"] = $email;
                header("location: ../index.php ");
                // Successfully logged in
            } else {
                // Wrong password 
                ?>
                <script>alert("Invalid Username/Password");
                    window.location.href = "../login.php";
                </script>
                <?php
            }
        }

        $stmt->close();
    }
}
?>