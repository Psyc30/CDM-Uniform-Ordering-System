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
        <form action="" class="form-2">

            <h2>Register Now!</h2>
            <input type="text" placeholder="First Name" required>
            <input type="text" placeholder="Last Name" required>
            <input type="text" placeholder="Middle Name">
            <input type="text" placeholder="Address" required>
            <input type="text" placeholder="Cellphone Number" required> 
            <input type="text" placeholder="Student ID" required>
            <input type="email" placeholder="Email" required>

            <div class="agreement-container">
                <input type="checkbox" name="agreement" id="agreement" required>
                <label for=""><a href="">Terms & Conditions</a></label>
            </div>

            <button type="submit">SIGN UP</button>
        </form>
    </div>

    <footer></footer>

</body>
</html>