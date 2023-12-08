<?php
if(!isset($_SESSION)){
    session_start();
}
include("./connection.php");
$con = connection();

if(isset($_POST["btnLogin"])){

    $studentno = $_POST['studentno'];
    $Email = $_POST['email'];

    $sqlLogin = "SELECT * FROM `userinfo` WHERE `studentnumber`='$studentno' AND `email` = '$Email'";
    $resultlogin = mysqli_query($con, $sqlLogin);
    $row = $resultlogin->fetch_assoc();
    $total = $resultlogin->num_rows;

    if($total > 0){
        $_SESSION['userLogin'] = $row['studentnumber'];
        $_SESSION['userLogin'] = $row['email'];
        $_SESSION['userLogin'];
        echo header('location:Homepage.php');
    }
    else{
        echo "<script> alert('Login Invalid!'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <link rel="shortcut icon" href="./imgs/Login_&_Registration_Imgs/The_Colegio_de_Montalban_Seal.png" type="image/x-icon">

    <title>CDM|Login</title>
</head>

<body>

    <div id="container" class="container">
        <form action="" class="form-1" method="post" onsubmit="return loginvalidation()">

            <h2>Welcome!</h2>
            
                <img class="cdm-seal" src="./imgs/Login_&_Registration_Imgs/The_Colegio_de_Montalban_Seal.png" alt="Colegio De Montalban Seal">

            <input type="text" id="StudentNumber" placeholder="Student Number" name="studentno">
            <input type="password" id="password"placeholder="Email"  name="email">

            <button type="submit" id="button" name="btnLogin">LOGIN</button>

            <div class="signup-redirect">
                <p>Not Yet Registered?</p>
                <a href="./Registration.php" class="signup">Sign Up</a>
            </div>

        </form>
        
        <form action="" class="form-2">
        </form>

    </div>

    <footer></footer>
    <script src="./Login.js"></script>
</body>
</html>