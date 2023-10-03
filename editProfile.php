<!DOCTYPE html>
<html lang="en">
<?php session_start();
require_once("./backend/dbconnect.php");

// get the values from the database 


?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="util/register.css">
</head>

<body>
    <div class="container">
        <div class="title">Update Details</div>
        <form action="backend/editProcess.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Student Id</span>
                    <input type="number" id="sid" name="sid" value=<?
                    ?> placeholder=" " disabled>
                </div>

                <div class="input-box">
                    <span class="details">Email Address</span>
                    <input type="email" id="email" name="email" value=<?php echo $_SESSION["email"] ?>
                        placeholder="Enter Your Email Address" disabled>
                </div>

                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" id="name" name="f_name" placeholder="Enter Your Name">
                </div>

                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" id="mobile" name="mobile" placeholder="Enter Your Phone Number">
                </div>

                <div class="input-box">
                    <span class="details">Enter Your Address </span>
                    <input type="text" id="address" name="address" placeholder="Enter Your Address">
                </div>


                <div class="input-box">
                    <span class="details">Date of Birth</span>
                    <input type="date" id="dob" name="dob" placeholder="Enter Your Birth date">
                </div>
                <div class="input-box">
                    <span class="details">Qualification</span>
                    <input type="text" id="q" name="qualification" placeholder="Enter Your Qualification">
                </div>


                <div class="input-box">
                    <span class="details">Branch</span>
                    <input type="text" id="q" name="branch" placeholder="Enter Your Branch">
                </div>





            </div>
            <div class="gender-details">
                <span class="gen-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="one"><input type="radio" name="gender" value="Male" id="gender"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <input type="radio" name="gender" value="Female" id="gender">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <input type="radio" name="gender" value="Not Described" id="gender">
                        <span class="dot three"></span>
                        <span class="gender">Prefer Not to Say</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" id="submit" value="Register">
            </div>
        </form>
    </div>

</body>

</html>