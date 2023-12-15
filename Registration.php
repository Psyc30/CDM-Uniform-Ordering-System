<?php
if(!isset($_SESSION)){
    session_start();
}
include("./connection.php");
$con = connection();

if(isset($_POST["btnSignUp"])){

    $fullname = $_POST['fullname'];
    $course = $_POST['course'];
    $studentno = $_POST['studentno'];
    $address = $_POST['address'];
    $cellnumber = $_POST['cellnumber'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `userinfo`(`fullname`,  `course`, `studentnumber`, `address`, `cellnumber`, `email`) VALUES('$fullname', '$course','$studentno','$address','$cellnumber','$email')";
    $result = mysqli_query($con,$sql);

    if($sql){
        echo"<script>
         alert('Successfully Registered')
         window.location = 'Login.php'
         </script>";
    }
    else{
        echo "Invalid Registration".mysqli_error($con);
    }
}
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
            <input type="text" placeholder="Full Name" id="fullname" name="fullname">
            <input type="text" placeholder="Course" id="course" name="course">
            <input type="text" placeholder="Student Number" id="studentno" name="studentno">
            <input type="text" placeholder="Address" id="address" name="address">
            <input type="text" placeholder="Cellphone Number" id="cellnumber" name="cellnumber"> 
            <input type="email" placeholder="Email" id="email" name="email">

            <div class="agreement-container">
                <input type="checkbox" name="agreement" id="showpass" required>
                <label for=""><a href="">Terms & Conditions</a></label>
            </div>

            <button type="submit" name="btnSignUp">SIGN UP</button>
        </form>
    </div>

    <footer>
        <div class="footer">
                <p class="Copyright">Copyright © 2023 CDM Uniform Ordering System</p>
        </div>
    </footer>
    <script src="./Registration.js"></script>
</body>
</html>