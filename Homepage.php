<?php
if(!isset($_SESSION)){
    session_start();
}
include("./connection.php");
$con = connection();

if(isset($_POST["btnBuy"])){

    $polo = $_POST['poloquantity'];
    $blouse = $_POST['blousequantity'];
    $slacks = $_POST['slacksquantity'];
    $peshirt = $_POST['peshirtquantity'];
    $pepants = $_POST['pepantsquantity'];
    $lace = $_POST['lacequantity'];
    $polosize = $_POST['polosize'];
    $blousesize = $_POST['blousesize'];
    $slackssize = $_POST['slackssize'];
    $peshirtsize = $_POST['peshirtsize'];
    $pepantssize = $_POST['pepantssize'];
    $poloprice = $_POST['poloprice'];
    $blouseprice = $_POST['blouseprice'];
    $slacksprice = $_POST['slacksprice'];
    $peshirtprice = $_POST['peshirtprice'];
    $pepantsprice = $_POST['pepantprice'];
    $laceprice = $_POST['laceprice'];

    $sql = "INSERT INTO `productorders`(`polo`, `blouse`, `slacks`, `peshirt`, `pepants`, `lace`, `polosize`, `blousesize`, `slackssize`, `peshirtsize`, `pepantssize`, `poloprice`, `blouseprice`, `slacksprice`, `peshirtprice`, `pepantsprice`, `laceprice`) VALUES ('$polo', '$blouse', '$slacks', '$peshirt', '$pepants', '$lace', '$polosize',  '$blousesize', '$slackssize', '$peshirtsize', '$pepantssize', '$poloprice', '$blouseprice', '$slacksprice','$peshirtprice', '$pepantsprice', '$laceprice')";
    $result = mysqli_query($con,$sql);

    if($sql){
        "<script>
         alert('Thank you for your Purchase!');
         </script>";
    }
    else{
        echo "Transaction Failed!".mysqli_error($con);
    }

    if(!isset($_SESSION['user'])){
        header("Location: Login.php");
        exit();
    }

}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Homepage.css">
    <link rel="shortcut icon" href="./imgs/Login_&_Registration_Imgs/The_Colegio_de_Montalban_Seal.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/23c655eb58.js" crossorigin="anonymous"></script>
    <title>CDM Uniform Ordering System</title>
</head>

<body>
    
    <header>
            <img class="cdm-seal" src="./imgs/Login_&_Registration_Imgs/The_Colegio_de_Montalban_Seal.png" alt="Colegio De Montalban Seal">
      
       <h1>Colegio De Montalban Uniform Ordering System</h1>
    </header>
    <div class="whitebar"></div>

    <div class="container">

        <section class="product-section">
            <h2 class="header2">Uniforms & ID Lace</h2>

            <section class="product-section2">

                <div class="products">
                    <div class="uniform">
                        <img src="./imgs/Products/CDM polo.png" alt="">
                    </div>
                    <form class="description" id="polo">
                        <h3 class="productname">CDM POLO</h3>
                        
                        <p class="size">Size:</p>
                        <div class="sizes">
                            <button type="button" id="psmall">S</button>
                            <button type="button" id="pmedium">M</button>
                            <button type="button" id="plarge">L</button>
                            <button type="button" id="pxlarge">XL</button>
                            <button type="button" id="pxxlarge">XXL</button>
                        </div>

                        <div class="Quantity">
                            <label for="">Quantity: </label>
                            <input type="number" id="quanti1" min="0" max="5" placeholder="0">
                        </div>
                        
                        <div class="price">
                            <label for="">Price:</label>
                            <p class="price-display" id="price-display1"></p>
                        </div>

                        <button type="button" class="add-cart" id="add-cart1">ADD TO CART</button>

                    </form>
                </div>
    
                <div class="products">
                    <div class="uniform">
                        <img src="./imgs/Products/CDM blouse.png" alt="">
                    </div>
                    <form class="description">
                        <h3 class="productname">CDM BLOUSE</h3>
                        
                        <p class="size">Size:</p>
                        <div class="sizes">
                        <button type="button" id="bsmall">S</button>
                        <button type="button" id="bmedium">M</button>
                        <button type="button" id="blarge">L</button>
                        <button type="button" id="bxlarge">XL</button>
                        <button type="button" id="bxxlarge">XXL</button>
                        </div>

                        <div class="Quantity">
                            <label for="">Quantity: </label>
                            <input type="number" min="0" max="5" id="quanti2" placeholder="0">
                        </div>
                        
                        <div class="price">
                            <label for="">Price:</label>
                            <p class="price-display" id="price-display2"></p>
                        </div>

                        <button type="button" class="add-cart" id="add-cart2">ADD TO CART</button>

                    </form>
                </div>
    
                <div class="products">
                    <div class="uniform">
                        <img src="./imgs/Products/Green slacks.png" alt="">
                    </div>
                    <form class="description">
                        <h3 class="productname">GREEN SLACKS</h3>
                        
                        <p class="size">Size:</p>
                        <div class="sizes">
                        <button type="button" id="ssmall">S</button>
                        <button type="button" id="smedium">M</button>
                        <button type="button" id="slarge">L</button>
                        <button type="button" id="sxlarge">XL</button>
                        <button type="button" id="sxxlarge">XXL</button>
                        </div>

                        <div class="Quantity">
                            <label for="">Quantity: </label>
                            <input type="number" min="0" max="5" id="quanti3" placeholder="0">
                        </div>
                        
                        <div class="price">
                            <label for="">Price:</label>
                            <p class="price-display" id="price-display3"></p>
                        </div>

                        <button type="button" class="add-cart" id="add-cart3">ADD TO CART</button>

                    </form>
                </div>
    
                <div class="products">
                    <div class="uniform">
                        <img src="./imgs/Products/CDM P.E shirt.png" alt="">
                    </div>
                    <form class="description">
                        <h3 class="productname">P.E SHIRT</h3>
                        
                        <p class="size">Size:</p>
                        <div class="sizes">
                        <button type="button" id="PSsmall">S</button>
                        <button type="button" id="PSmedium">M</button>
                        <button type="button" id="PSlarge">L</button>
                        <button type="button" id="PSxlarge">XL</button>
                        <button type="button" id="PSxxlarge">XXL</button>
                        </div>

                        <div class="Quantity">
                            <label for="">Quantity: </label>
                            <input type="number" min="0" max="5" id="quanti4" placeholder="0">
                        </div>
                        
                        <div class="price">
                            <label for="">Price:</label>
                            <p class="price-display" id="price-display4"></p>
                        </div>

                        <button type="button" class="add-cart" id="add-cart4">ADD TO CART</button>

                    </form>
                </div>
    
                <div class="products">
                    <div class="uniform">
                        <img src="./imgs/Products/CDM P.E pants.png" alt="">
                    </div>
                    <form class="description">
                        <h3 class="productname">P.E PANTS</h3>
                        
                        <p class="size">Size:</p>
                        <div class="sizes">
                        <button type="button" id="PPsmall">S</button>
                        <button type="button" id="PPmedium">M</button>
                        <button type="button" id="PPlarge">L</button>
                        <button type="button" id="PPxlarge">XL</button>
                        <button type="button" id="PPxxlarge">XXL</button>
                        </div>

                        <div class="Quantity">
                            <label for="">Quantity: </label>
                            <input type="number" min="0" max="5" id="quanti5" placeholder="0">
                        </div>
                        
                        <div class="price">
                            <label for="">Price:</label>
                            <p class="price-display" id="price-display5"></p>
                        </div>

                        <button type="button" class="add-cart" id="add-cart5">ADD TO CART</button>

                    </form>
                </div>
    
                <div class="products">
                    <div class="uniform">
                        <img src="./imgs/Products/CDM ID lace.png" alt="">
                    </div>
                    <form class="description">
                        <h3 class="productname">CDM I.D LACE</h3>
                        
                        <div class="Quantity adjust">
                            <label for="">Quantity: </label>
                            <input type="number" min="0" max="5" id="quanti6" placeholder="0">
                        </div>
                        
                        <div class="price">
                            <label for="">Price:</label>
                            <p class="price-display" id="price-display6"></p>
                        </div>

                        <button type="button" class="add-cart" id="add-cart6">ADD TO CART</button>

                    </form>
                </div>

            </section>

        </section>

        <section class="total-item-section">

            <section class="subsection1">
                <div class="inlinelabel">
                    <label for="" class="infolabel">Welcome CDM Student!</label>
                </div>

                

                <a class="logout" href="Logout.php">Logout</a>
            </section>

            <form action="" class="subsection2" method="POST">
                <h2 id="cart">CART</h2>

                <table>
                    <tr class="table-label">
                        <td class="tablelabels">Item</td>
                        <td class="tablelabels">Quantity</td>
                        <td class="tablelabels">Size</td>
                        <td class="tablelabels">Price</td>
                        <td class="clear tablelabels">Clear</td>
                    </tr>
                    <tr class="polo">
                        <td class="datalabel">Polo</td>
                        <td id="polo-quanti" name="poloquantity"></td>
                        <td id="polo-size" name="polosize"></td>
                        <td id="polo-price" name="poloprice"></td>
                        <td class="clearbtn"><button type="button" id="clear1">X</button></td>
                    </tr>
                    <tr class="blouse">
                        <td class="datalabel">Blouse</td>
                        <td id="blouse-quanti" name="blousequantity"></td>
                        <td id="blouse-size" name="blousesize"></td>
                        <td id="blouse-price" name="blouseprice"></td>
                        <td class="clearbtn"><button type="button" id="clear2">X</button></td>
                    </tr>
                    <tr class="slacks">
                        <td class="datalabel">Slacks</td>
                        <td id="slacks-quanti" name="slacksquantity"></td>
                        <td id="slacks-size" name="slackssize"></td>
                        <td id="slacks-price" name="slacksprice"></td>
                        <td class="clearbtn"><button type="button" id="clear3">X</button></td>
                    </tr>
                    <tr class="PEshirt">
                        <td class="datalabel">P.E Shirt</td>
                        <td id="PEshirt-quanti" name="peshirtquantity"></td>
                        <td id="PEshirt-size" name="peshirtsize"></td>
                        <td id="PEshirt-price" name="peshirtprice"></td>
                        <td class="clearbtn"><button type="button" id="clear4">X</button></td>
                    </tr>
                    <tr class="PEpants">
                        <td class="datalabel">P.E Pants</td>
                        <td id="PEpants-quanti" name="pepantsquantity"></td>
                        <td id="PEpants-size" name="pepantssize"></td>
                        <td id="PEpants-price" name="pepantprice"></td>
                        <td class="clearbtn"><button type="button" id="clear5">X</button></td>
                    </tr>
                    <tr class="IDlace">
                        <td class="datalabel">ID Lace</td>
                        <td id="lace-quanti" name="lacequantity"></td>
                        <td></td>
                        <td id="lace-price" name="laceprice"></td>
                        <td class="clearbtn"><button type="button" id="clear6">X</button></td>
                    </tr>
                </table>
                <input type="text" class="hidden" id="data1" name="poloquantity">
                <input type="text" class="hidden" id="data2" name="polosize">
                <input type="text" class="hidden" id="data3" name="poloprice">
                <input type="text" class="hidden" id="data4" name="blousequantity">
                <input type="text" class="hidden" id="data5" name="blousesize">
                <input type="text" class="hidden" id="data6" name="blouseprice">
                <input type="text" class="hidden" id="data7" name="slacksquantity">
                <input type="text" class="hidden" id="data8" name="slackssize">
                <input type="text" class="hidden" id="data9" name="slacksprice">
                <input type="text" class="hidden" id="data10" name="peshirtquantity">
                <input type="text" class="hidden" id="data11" name="peshirtsize">
                <input type="text" class="hidden" id="data12" name="peshirtprice">
                <input type="text" class="hidden" id="data13" name="pepantsquantity">
                <input type="text" class="hidden" id="data14" name="pepantssize">
                <input type="text" class="hidden" id="data15" name="pepantprice">
                <input type="text" class="hidden" id="data16" name="lacequantity">
                <input type="text" class="hidden" id="data17" name="laceprice">

                <button type="submit" class="buy-button" name="btnBuy">BUY</button>
            </form>
           
        </section>
    </div>
    <footer>
    </footer>
    <script defer src="./Homepage.js"></script>
</body>
</html>