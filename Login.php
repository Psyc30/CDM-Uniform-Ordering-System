<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <link rel="shortcut icon" href="./imgs/Login_&_Registration_Imgs/The_Colegio_de_Montalban_Seal.png" type="image/x-icon">
    <script defer src="./Login.js"></script>
    <title>CDM|Login</title>
</head>

<body>

    <div id="container" class="container">
        <form action="./Homepage.php" class="form-1" >

            <h2>Welcome!</h2>
            
                <img class="cdm-seal" src="./imgs/Login_&_Registration_Imgs/The_Colegio_de_Montalban_Seal.png" alt="Colegio De Montalban Seal">

            <input type="text" id="StudentNumber" placeholder="Student Number" >
            <input type="password" id="password"
            placeholder="Email"  >

            <button type="submit" id="button">LOGIN</button>

            <div class="signup-redirect">
                <p>Not Yet Registered?</p>
                <a href="./Registration.php" class="signup">Sign Up</a>
            </div>

        </form>
        
        <form action="" class="form-2">
        </form>

    </div>

    <footer></footer>

</body>
</html>