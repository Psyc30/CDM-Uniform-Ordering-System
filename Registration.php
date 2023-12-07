<?php
include ("./connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Registration.css">
    <link rel="shortcut icon" href="./imgs/Login_&_Registration_Imgs/The_Colegio_de_Montalban_Seal.png" type="image/x-icon">
    <script src="./Registration.js"></script>
    <title>CDM|Registration</title>
</head>

<body>

    <div id="container" class="container">
        <form action="" class="form-1">

            <img class="cdm-seal" src="./imgs/Login_&_Registration_Imgs/The_Colegio_de_Montalban_Seal.png" alt="Colegio De Montalban Seal">

            <div class="login-redirect">
                <a href="./Login.php" class="login">LOGIN</a>
            </div>

        </form>
        <form action="" class="form-2" method="post" onsubmit="return registrationvalidation()">

            <h2>Register Now!</h2>
            <input type="text" placeholder="Full Name" id="fullname">
            <input type="text" placeholder="Course" id="course">
            <input type="text" placeholder="Student Number" id="studentno">
            <input type="text" placeholder="Address" id="address">
            <input type="text" placeholder="Cellphone Number" id="cellnumber"> 
            <input type="email" placeholder="Email" id="email">

            <div class="agreement-container">
                <input type="checkbox" name="agreement" id="agreement" required>
                <label for=""><a href="">Terms & Conditions</a></label>
            </div>

            <button type="submit">SIGN UP</button>
        </form>
    </div>

    <footer></footer>
    <script src="./Registration.js"></script>
</body>
</html>