<?php 
if(!isset($_SESSION)){
    session_start();
}
include("./connection.php");
$con = connection();

if(isset($_POST["btnUpdate1"])){
    $psmall = $_POST['psmall'];
    $sql = "UPDATE `productstocks` SET `psmall`='$psmall' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Succesfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate2"])){
    $pmedium = $_POST['pmedium'];
    $sql = "UPDATE `productstocks` SET `pmedium`='$pmedium' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Succesfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate3"])){
    $plarge = $_POST['plarge'];
    $sql = "UPDATE `productstocks` SET `plarge`='$plarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Succesfully');
        </script>";
    } 
}
if(isset($_POST["btnUpdate4"])){
    $pxlarge = $_POST['pxlarge'];
    $sql = "UPDATE `productstocks` SET `pxlarge`='$pxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Succesfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate5"])){
    $pxxlarge = $_POST['pxxlarge'];
    $sql = "UPDATE `productstocks` SET `pxxlarge`='$pxxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Succesfully');
        </script>";
    } 
}
if(isset($_POST["btnSignUp6"])){
    $psmall = $_POST['psmall'];
    $sql = "UPDATE `productstocks` SET `psmall`='$psmall' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Succesfully');
        </script>";
    }
}
if(isset($_POST["btnSignUp7"])){
    $pmedium = $_POST['pmedium'];
    $sql = "UPDATE `productstocks` SET `pmedium`='$pmedium' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Succesfully');
        </script>";
    }
}
if(isset($_POST["btnSignUp8"])){
    $plarge = $_POST['plarge'];
    $sql = "UPDATE `productstocks` SET `plarge`='$plarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Succesfully');
        </script>";
    } 
}
if(isset($_POST["btnSignUp9"])){
    $pxlarge = $_POST['pxlarge'];
    $sql = "UPDATE `productstocks` SET `pxlarge`='$pxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Succesfully');
        </script>";
    }
}
if(isset($_POST["btnSignUp10"])){
    $pxxlarge = $_POST['pxxlarge'];
    $sql = "UPDATE `productstocks` SET `pxxlarge`='$pxxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Succesfully');
        </script>";
    } 
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}
if(isset($_POST["btnSignUp"])){
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./adminpanel.css">
    <link rel="shortcut icon" href="./imgs/Login_&_Registration_Imgs/The_Colegio_de_Montalban_Seal.png" type="image/x-icon">
    <title>Admin Dashboard</title>
</head>
<body>
    <header>
        <img class="cdm-seal" src="./imgs/Login_&_Registration_Imgs/The_Colegio_de_Montalban_Seal.png" alt="Colegio De Montalban Seal">
  
   <h1>Colegio De Montalban Uniform Ordering System</h1>

</header>
<div class="whitebar">
    <p class="paradashboard">ADMIN DASHBOARD</p>
</div>
    <p class="stocks">PRODUCT STOCKS</p>
    <section class="product-section">
        <form action="" class="card" method="post">
            <h2>CDM POLO</h2>
            <table>
                <tr>
                    <td class="size">Small</td>
                    <td><input type="number" min="0" placeholder="0" name="psmall"></td>
                    <td><button type="submit" name="btnUpdate1">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Medium</td>
                    <td><input type="number" min="0" placeholder="0" name="pmedium"></td>
                    <td><button type="submit" name="btnUpdate2">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Large</td>
                    <td><input type="number" min="0" placeholder="0" name="plarge"></td>
                    <td><button type="submit" name="btnUpdate3">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XLarge</td>
                    <td><input type="number" min="0" placeholder="0" name="pxlarge"></td>
                    <td><button type="submit" name="btnUpdate4">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XXLarge</td>
                    <td><input type="number" min="0" placeholder="0" name="pxxlarge"></td>
                    <td><button type="submit" name="btnUpdate5">Update</button></td>
                </tr>
            </table>
            <p class="pavailable"> Available Stocks</p>
            <table class="available">
                <tr>
                    <td>Small</td>
                    <td name="psmall"></td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td name="pmedium"></td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td name="plarge"></td>
                </tr>
                <tr>
                    <td>XLarge</td>
                    <td name="pxlarge"></td>
                </tr>
                <tr>
                    <td>XXLarge</td>
                    <td name="pxxlarge"></td>
                </tr>
            </table>
        </form>
        <form action="" class="card">
            <h2>CDM BLOUSE</h2>
            <table>
                <tr>
                    <td class="size">Small</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Medium</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Large</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XLarge</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XXLarge</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
            </table>
            <p class="pavailable"> Available Stocks</p>
            <table class="available">
                <tr>
                    <td>Small</td>
                    <td name="bsmall"></td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td name="bmedium"></td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td name="blarge"></td>
                </tr>
                <tr>
                    <td>XLarge</td>
                    <td name="bxlarge"></td>
                </tr>
                <tr>
                    <td>XXLarge</td>
                    <td name="bxxlarge"></td>
                </tr>
            </table>
        </form>
        <form action="" class="card">
            <h2>SLACKS</h2>
            <table>
                <tr>
                    <td class="size">Small</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Medium</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Large</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XLarge</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XXLarge</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
            </table>
            <p class="pavailable"> Available Stocks</p>
            <table class="available">
                <tr>
                    <td>Small</td>
                    <td name="ssmall"></td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td name="smedium"></td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td name="slarge"></td>
                </tr>
                <tr>
                    <td>XLarge</td>
                    <td name="sxlarge"></td>
                </tr>
                <tr>
                    <td>XXLarge</td>
                    <td name="sxxlarge"></td>
                </tr>
            </table>
        </form>
        <form action="" class="card">
            <h2>P.E. SHIRT</h2>
            <table>
                <tr>
                    <td class="size">Small</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Medium</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Large</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XLarge</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XXLarge</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
            </table>
            <p class="pavailable"> Available Stocks</p>
            <table class="available">
                <tr>
                    <td>Small</td>
                    <td name="pssmall"></td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td name="psmedium"></td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td name="pslarge"></td>
                </tr>
                <tr>
                    <td>XLarge</td>
                    <td name="psxlarge"></td>
                </tr>
                <tr>
                    <td>XXLarge</td>
                    <td name="psxxlarge"></td>
                </tr>
            </table>
        </form>
        <form action="" class="card">
            <h2>P.E. PANTS</h2>
            <table>
                <tr>
                    <td class="size">Small</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Medium</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Large</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XLarge</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XXLarge</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
            </table>
            <p class="pavailable"> Available Stocks</p>
            <table class="available">
                <tr>
                    <td>Small</td>
                    <td name="ppsmall"></td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td name="ppmedium"></td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td name="pplarge"></td>
                </tr>
                <tr>
                    <td>XLarge</td>
                    <td name="ppxlarge"></td>
                </tr>
                <tr>
                    <td>XXLarge</td>
                    <td name="ppxxlarge"></td>
                </tr>
            </table>
        </form>
        <form action="" class="card">
            <h2>ID LACE</h2>
            <table>
                <tr>
                    <td class="size">Lace</td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><button type="submit">Update</button></td>
                </tr>
                
            </table>
            <div class="fill"></div>
            <p class="pavailable"> Available Stocks</p>
            <table class="available">
                <tr>
                    <td>Lace</td>
                    <td name="idlace"></td>
                </tr>
            </table>
        </form>


    </section>

    <p class="stocks">TRANSACTIONS</p>
    <section class="transaction-section">
        
        
    </section>

    <section class="sales-section">

    </section>
    <footer></footer>
</body>
</html>