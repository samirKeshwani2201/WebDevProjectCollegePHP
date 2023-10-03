<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    require_once("./dbconnect.php");
    $fileName = $_FILES["document"]["name"];
    $sq = "INSERT INTO `doc_table`(`doc_name`, `stu_id`) VALUES (?,?)";
    $stmt = $conn->prepare($sq);
    $stmt->bind_param("si", $fileName, $_SESSION["stu_id"]);
    $stmt->execute(); 
    if ($stmt->affected_rows > 0) {
        // sucessful insertion 
        move_uploaded_file($_FILES["document"]["tmp_name"], "../server/$fileName"); 
        ?>
        <script>
            alert("Document Uploaded Sucessfully");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Document Upload Failed");
        </script>
        <?php
    } ?>
    <script>
        window.location.href = "../index.php";
    </script>

    <?php

}

?>