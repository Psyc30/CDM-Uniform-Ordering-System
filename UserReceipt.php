<?php 
if(!isset($_SESSION)){
    session_start();
}
include("./connection.php");
$con = connection();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./UserReceipt.css">
    <link rel="shortcut icon" href="./imgs/Login_&_Registration_Imgs/The_Colegio_de_Montalban_Seal.png" type="image/x-icon">
    <title>Receipt</title>
</head>
<body>
    <div class="container">
        <h1>Receipt</h1>
        <table>
            <thead>
                <th>Item</th>
                <th>Quantity</th>
                <th>Size</th>
                <th>price</th>
            </thead>
            <tbody>
                <tr>
                    <td>Polo</td>
                    <td><?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $polo_q = $_POST['polo-q'];
                        echo  $polo_q;
                    }
                    ?></td>
                    <td>
                    <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $polo_q = $_POST['polo-q'];
                        echo  $polo_q;
                    }
                    ?>
                    </td>
                    <td id="pprice">
                    <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $polo_q = $_POST['polo-q'];
                        echo  $polo_q;
                    }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Blouse</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>SLacks</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>PE Shirt</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>PE Pants</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>ID Lace</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="line"></div>
        <div>
            <label for="" class="total">TOTAL:</label>
            <label for=""></label>
        </div>
        <button onclick="window.print()">Save</button>
    </div>

    <script src="./Homepage.js"></script>
</body>
</html>