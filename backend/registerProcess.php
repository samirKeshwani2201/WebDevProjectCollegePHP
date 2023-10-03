<?php
session_start();






if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cur_email = $_SESSION["email"];

    require_once("./dbconnect.php");

    // Condition to check for the user if it is already registered or not 

    $sq = "select stu_id from registration where stu_id=?";
    $stmt = $conn->prepare($sq);
    $stmt->bind_param("i", $_SESSION["stu_id"]);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows === 0) {
        // first time register 

        $name = $_POST["f_name"];
        $mobile = $_POST["mobile"];
        $branch = $_POST["branch"];
        $dob = $_POST["dob"];
        $address = $_POST["address"];
        $gender = $_POST["gender"];
        $qualification = $_POST["qualification"];

        $sql = "INSERT INTO registration (`stu_id`, `name`, `gender`, `phone`, `date_of_birth`, `address`, `qualification`) VALUES (?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("issssss", $_SESSION["stu_id"], $name, $gender, $mobile, $dob, $address, $qualification);

        if ($stmt->execute()) {
            ?>
            <script>alert("User Registered successfully");

            </script>
            <?php
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    } else {
        // Already registered 
        ?>
        <script>alert("User already registered!!")

        </script>
        <?php
    } ?>
    <script>
        window.location.href = "../index.php";
    </script>
    <?php

}


?>