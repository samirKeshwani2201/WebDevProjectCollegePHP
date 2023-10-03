<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;

        }

        body {

            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            margin: 0;
            height: fit-content;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }


        h2,
        h3,
        a {
            color: #333333;
        }

        a {
            text-decoration: none;
        }


        .logo {
            margin: 0;
            font-size: 1.45em;
        }

        .main-nav {
            margin-top: 5px;
            display: flex;

        }

        .logo a,
        .main-nav a {
            padding: 10px 15px;
            text-transform: uppercase;
            text-align: center;
            display: block;
        }

        .main-nav a {
            color: #333333;
            font-size: .99em;
        }

        .main-nav a:hover {
            color: #718daa;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            padding-top: .5em;
            padding-bottom: .5em;
            border: 1px solid #a2a2a2;
            background-color: #f4f4f4;
            border-radius: 5px;
        }

        main {
            width: 100%;
            background-color: #333333;
            padding: 20px;
            height: calc(100vh - 80px);
            display: flex;
            gap: 10px;
        }

        .col {
            margin: 20px;
            width: 100%;
            background-color: #f4f4f4;
        }

        table {
            text-align: left;
        }

        .upload_doc {
            position: absolute;
            left: 0;
            top: 0;
            height: 50px;
            width: 100%;
            border-bottom: 1px solid black;
            display: flex;
            /* flex-direction: column; */
            justify-content: space-between;
            padding: 0 10px;
            align-items: center;
            /* background-color: darkblue; */

        }

        .document_container {
            position: relative;
        }

        .custom-btn {
            padding: 10px;
            color: #fff;
            background-color: #333333;
            border: 1px solid black;
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-btn:hover {
            background-color: #6C757D;
        }

        .custom-txt {
            margin-left: 10px;
            font-family: sans-serif;
            color: #aaa;
        }

        .uploaded_documents {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 50px;

        }

        .log {
            border: 1px solid #333333;
            padding: 0 10px;
            /* margin-right: 10px; */
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
            border-radius: 6px;
        }

        table {
            width: 100%;
        }

        .uploaded_documents>table>thead,
        .uploaded_documents>table>tbody {
            text-align: center;
        }

        .not-reg {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        table>thead>th,
        table>thead>tr>th,
        table>tbody>tr>td {
            padding: 10px;
        }

        .log>img {
            border-radius: 50%;
            margin: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <h1 class="logo"><a href="#">Student Details</a></h1>
        <ul class="main-nav">
            <li><a href="registration.php">Register</a></li>
            <li><a href="editProfile.php">Edit Profile</a></li>
            <li>
                <div class="log">
                    <label style="color: #333333;">
                        Hello,
                        <?php echo $_SESSION["email"] ?>
                    </label>
                    <a href="./backend/logoutProcess.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <main class="container">

        <div class="document_container col">
            <form class="upload_doc" action="backend/documnet_uploader.php" method="post" enctype="multipart/form-data">
                <label> Select Your File :
                    <input type="file" name="document" class="custom-btn">
                </label>
                <button class="custom-btn">Upload</button>
            </form>
            <div class="uploaded_documents">
                <table border="1">
                    <thead>
                        <th>Document Name</th>
                        <th>Uploaded Date</th>
                        <th>Download</th>
                    </thead>
                    <tbody>
                        <?php

                        // we have  the email in session  then from that get  the 
                        require_once("./backend/dbconnect.php");
                        $sq = "select * from doc_table where stu_id=" . $_SESSION["stu_id"];
                        $document_details = $conn->query($sq);
                        while ($row = $document_details->fetch_assoc()) {
                            echo "<tr>"
                                . "<td>" . $row['doc_name'] . "</td>"
                                . "<td>" . $row['time_upload'] . "</td>"
                                . "<td><a style='color: #FF6000;' href='uploaded_documents/" . $row['doc_name'] . "' download>Click Here</a></td>"
                                . "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>