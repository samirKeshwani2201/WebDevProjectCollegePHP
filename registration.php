<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="util/register.css">
</head> 
<body>
 
    <div class="container">
        <div class="title">Registration</div>
        <form action="backend/registerProcess.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" id="name" name="f_name" value=" " placeholder="Enter Your First Name" disabled>
                </div>
                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" id="userName" name="l_name" value=" " placeholder="Enter Your Last Name"
                        disabled>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" id="mobile" name="mobile" placeholder="Enter Your Phone Number">
                </div>
                <div class="input-box">
                    <span class="details">Email Address</span>
                    <input type="email" id="email" name="email" value=" " placeholder="Enter Your Email Address"
                        disabled>
                </div>
                <div class="input-box">
                    <span class="details">Date of Birth</span>
                    <input type="date" id="dob" name="dob" placeholder="Enter Your Birth date">
                </div>
                <div class="input-box">
                    <span class="details">Qualification</span>
                    <input type="text" id="q" name="qualification" placeholder="Enter Your Qualification">
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