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
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate2"])){
    $pmedium = $_POST['pmedium'];
    $sql = "UPDATE `productstocks` SET `pmedium`='$pmedium' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate3"])){
    $plarge = $_POST['plarge'];
    $sql = "UPDATE `productstocks` SET `plarge`='$plarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    } 
}
if(isset($_POST["btnUpdate4"])){
    $pxlarge = $_POST['pxlarge'];
    $sql = "UPDATE `productstocks` SET `pxlarge`='$pxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate5"])){
    $pxxlarge = $_POST['pxxlarge'];
    $sql = "UPDATE `productstocks` SET `pxxlarge`='$pxxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    } 
}
if(isset($_POST["btnUpdate6"])){
    $bsmall = $_POST['bsmall'];
    $sql = "UPDATE `productstocks` SET `bsmall`='$bsmall' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate7"])){
    $bmedium = $_POST['bmedium'];
    $sql = "UPDATE `productstocks` SET `bmedium`='$bmedium' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate8"])){
    $blarge = $_POST['blarge'];
    $sql = "UPDATE `productstocks` SET `blarge`='$blarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    } 
}
if(isset($_POST["btnUpdate9"])){
    $bxlarge = $_POST['bxlarge'];
    $sql = "UPDATE `productstocks` SET `bxlarge`='$bxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate10"])){
    $bxxlarge = $_POST['bxxlarge'];
    $sql = "UPDATE `productstocks` SET `bxxlarge`='$bxxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    } 
}
if(isset($_POST["btnUpdate11"])){
    $ssmall = $_POST['ssmall'];
    $sql = "UPDATE `productstocks` SET `ssmall`='$ssmall' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate12"])){
    $smedium = $_POST['smedium'];
    $sql = "UPDATE `productstocks` SET `smedium`='$smedium' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate13"])){
    $slarge = $_POST['slarge'];
    $sql = "UPDATE `productstocks` SET `slarge`='$slarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    } 
}
if(isset($_POST["btnUpdate14"])){
    $sxlarge = $_POST['sxlarge'];
    $sql = "UPDATE `productstocks` SET `sxlarge`='$sxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate15"])){
    $sxxlarge = $_POST['sxxlarge'];
    $sql = "UPDATE `productstocks` SET `sxxlarge`='$sxxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate16"])){
    $pssmall = $_POST['pssmall'];
    $sql = "UPDATE `productstocks` SET `pssmall`='$pssmall' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
    
}
if(isset($_POST["btnUpdate17"])){
    $psmedium = $_POST['psmedium'];
    $sql = "UPDATE `productstocks` SET `psmedium`='$psmedium' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
    
}
if(isset($_POST["btnUpdate18"])){
    $pslarge = $_POST['pslarge'];
    $sql = "UPDATE `productstocks` SET `pslarge`='$pslarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    } 
}
if(isset($_POST["btnUpdate19"])){
    $psxlarge = $_POST['psxlarge'];
    $sql = "UPDATE `productstocks` SET `psxlarge`='$psxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate20"])){
    $psxxlarge = $_POST['psxxlarge'];
    $sql = "UPDATE `productstocks` SET `psxxlarge`='$psxxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate21"])){
    $ppsmall = $_POST['ppsmall'];
    $sql = "UPDATE `productstocks` SET `ppsmall`='$ppsmall' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate22"])){
    $ppmedium = $_POST['ppmedium'];
    $sql = "UPDATE `productstocks` SET `ppmedium`='$ppmedium' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate23"])){
    $pplarge = $_POST['pplarge'];
    $sql = "UPDATE `productstocks` SET `pplarge`='$pplarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    } 
}
if(isset($_POST["btnUpdate24"])){
    $ppxlarge = $_POST['ppxlarge'];
    $sql = "UPDATE `productstocks` SET `ppxlarge`='$ppxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    }
}
if(isset($_POST["btnUpdate25"])){
    $ppxxlarge = $_POST['ppxxlarge'];
    $sql = "UPDATE `productstocks` SET `ppxxlarge`='$ppxxlarge' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    } 
}
if(isset($_POST["btnUpdate26"])){
    $idlace = $_POST['idlace'];
    $sql = "UPDATE `productstocks` SET `idlace`='$idlace' WHERE 1";
    $result = mysqli_query($con,$sql);
    if($sql){
        echo"<script>
        alert('Update Successfully');
        </script>";
    } 
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
                    <td name="psmall">
                        <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['psmall'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td name="pmedium">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['pmedium'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td name="plarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['plarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>XLarge</td>
                    <td name="pxlarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['pxlarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>XXLarge</td>
                    <td name="pxxlarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['pxxlarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
        <form action="" class="card" method="post">
            <h2>CDM BLOUSE</h2>
            <table>
                <tr>
                    <td class="size">Small</td>
                    <td><input type="number" min="0" placeholder="0" name="bsmall"></td>
                    <td><button type="submit" name="btnUpdate6">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Medium</td>
                    <td><input type="number" min="0" placeholder="0" name="bmedium"></td>
                    <td><button type="submit" name="btnUpdate7">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Large</td>
                    <td><input type="number" min="0" placeholder="0" name="blarge"></td>
                    <td><button type="submit" name="btnUpdate8">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XLarge</td>
                    <td><input type="number" min="0" placeholder="0" name="bxlarge"></td>
                    <td><button type="submit" name="btnUpdate9">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XXLarge</td>
                    <td><input type="number" min="0" placeholder="0"  name="bxxlarge"></td>
                    <td><button type="submit" name="btnUpdate10">Update</button></td>
                </tr>
            </table>
            <p class="pavailable"> Available Stocks</p>
            <table class="available">
                <tr>
                    <td>Small</td>
                    <td name="bsmall">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['bsmall'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td name="bmedium">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['bmedium'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td name="blarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['blarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>XLarge</td>
                    <td name="bxlarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['bxlarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>XXLarge</td>
                    <td name="bxxlarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['bxxlarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
        <form action="" class="card" method="post">
            <h2>SLACKS</h2>
            <table>
                <tr>
                    <td class="size">Small</td>
                    <td><input type="number" min="0" placeholder="0" name="ssmall"></td>
                    <td><button type="submit" name="btnUpdate11">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Medium</td>
                    <td><input type="number" min="0" placeholder="0" name="smedium"></td>
                    <td><button type="submit" name="btnUpdate12">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Large</td>
                    <td><input type="number" min="0" placeholder="0" name="slarge"></td>
                    <td><button type="submit" name="btnUpdate13">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XLarge</td>
                    <td><input type="number" min="0" placeholder="0" name="sxlarge"></td>
                    <td><button type="submit" name="btnUpdate14">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XXLarge</td>
                    <td><input type="number" min="0" placeholder="0" name="sxxlarge"></td>
                    <td><button type="submit" name="btnUpdate15">Update</button></td>
                </tr>
            </table>
            <p class="pavailable"> Available Stocks</p>
            <table class="available">
                <tr>
                    <td>Small</td>
                    <td name="ssmall">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['ssmall'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td name="smedium">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['smedium'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td name="slarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['slarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>XLarge</td>
                    <td name="sxlarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['sxlarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>XXLarge</td>
                    <td name="sxxlarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['sxxlarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
        <form action="" class="card" method="post">
            <h2>P.E. SHIRT</h2>
            <table>
                <tr>
                    <td class="size">Small</td>
                    <td><input type="number" min="0" placeholder="0" name="pssmall"></td>
                    <td><button type="submit" name="btnUpdate16">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Medium</td>
                    <td><input type="number" min="0" placeholder="0" name="psmedium"></td>
                    <td><button type="submit" name="btnUpdate17">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Large</td>
                    <td><input type="number" min="0" placeholder="0" name="pslarge"></td>
                    <td><button type="submit" name="btnUpdate18">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XLarge</td>
                    <td><input type="number" min="0" placeholder="0" name="psxlarge"></td>
                    <td><button type="submit" name="btnUpdate19">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XXLarge</td>
                    <td><input type="number" min="0" placeholder="0" name="psxxlarge"></td>
                    <td><button type="submit" name="btnUpdate20">Update</button></td>
                </tr>
            </table>
            <p class="pavailable"> Available Stocks</p>
            <table class="available">
                <tr>
                    <td>Small</td>
                    <td name="pssmall">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['pssmall'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td name="psmedium">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['psmedium'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td name="pslarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['pslarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>XLarge</td>
                    <td name="psxlarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['psxlarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>XXLarge</td>
                    <td name="psxxlarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['psxxlarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
        <form action="" class="card" method="post">
            <h2>P.E. PANTS</h2>
            <table>
                <tr>
                    <td class="size">Small</td>
                    <td><input type="number" min="0" placeholder="0" name="ppsmall"></td>
                    <td><button type="submit" name="btnUpdate21">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Medium</td>
                    <td><input type="number" min="0" placeholder="0" name="ppmedium"></td>
                    <td><button type="submit" name="btnUpdate22">Update</button></td>
                </tr>
                <tr>
                    <td class="size">Large</td>
                    <td><input type="number" min="0" placeholder="0" name="pplarge"></td>
                    <td><button type="submit" name="btnUpdate23">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XLarge</td>
                    <td><input type="number" min="0" placeholder="0" name="ppxlarge"></td>
                    <td><button type="submit" name="btnUpdate24">Update</button></td>
                </tr>
                <tr>
                    <td class="size">XXLarge</td>
                    <td><input type="number" min="0" placeholder="0" name="ppxxlarge"></td>
                    <td><button type="submit" name="btnUpdate25">Update</button></td>
                </tr>
            </table>
            <p class="pavailable"> Available Stocks</p>
            <table class="available">
                <tr>
                    <td>Small</td>
                    <td name="ppsmall">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['ppsmall'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td name="ppmedium">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['ppmedium'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td name="pplarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['pplarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>XLarge</td>
                    <td name="ppxlarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['ppxlarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>XXLarge</td>
                    <td name="ppxxlarge">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['ppxxlarge'];
                            }
                          }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
        <form action="" class="card" method="post">
            <h2>ID LACE</h2>
            <table>
                <tr>
                    <td class="size">Lace</td>
                    <td><input type="number" min="0" placeholder="0" name="idlace"></td>
                    <td><button type="submit" name="btnUpdate26">Update</button></td>
                </tr>
                
            </table>
            <div class="fill"></div>
            <p class="pavailable"> Available Stocks</p>
            <table class="available">
                <tr>
                    <td>Lace</td>
                    <td name="idlace">
                    <?php
                          $sql = "SELECT * FROM productstocks";

                          $result = mysqli_query($con,$sql);    
                          $resultCheck = mysqli_num_rows($result);

                          if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['idlace'];
                            }
                          }
                        ?>
                    </td>
                </tr>
            </table>
        </form>

    </section>

    <p class="stocks">TRANSACTIONS</p>
    <section class="transaction-section">
        <table class="transactionTable">
                <tr class="tableheader">
                    <td class="userroww">USER <br>Student name</td>
                    <td class="idrow">ID</td>
                    <td>POLO <br>(Q/S/P)</td>
                    <td>BLOUSE <br>(Q/S/P)</td>
                    <td>SLACKS <br>(Q/S/P)</td>
                    <td>PE SHIRT <br>(Q/S/P)</td>
                    <td>PE PANTS <br>(Q/S/P)</td>
                    <td>ID LACE <br>(Q/P)</td>
                    <td>CONTROL <br>(Confirm)</td>
                </tr>
                <?php 
                $fetchdata = mysqli_query($con,"SELECT * FROM `productorders` ORDER BY `transaction_id` DESC");
                while($row = mysqli_fetch_assoc($fetchdata)){
                  ?>
                <tr class="datatable">
                    <td></td>
                    <td><?php echo $row['transaction_id']?></td>
                    <td><?php echo $row['polo_q']; echo" / "; echo $row['polo_s']; echo" / "; echo $row['polo_p'];?></td>
                    <td><?php echo $row['blouse_q']; echo" / "; echo $row['blouse_s']; echo" / "; echo $row['blouse_p'];?></td>
                    <td><?php echo $row['slacks_q']; echo" / "; echo $row['slacks_s']; echo" / "; echo $row['slacks_p'];?></td>
                    <td><?php echo $row['peshirt_q']; echo" / "; echo $row['peshirt_s']; echo" / "; echo $row['peshirt_p'];?></td>
                    <td><?php echo $row['pepants_q']; echo" / "; echo $row['pepants_s']; echo" / "; echo $row['pepants_p'];?></td>
                    <td><?php echo $row['idlace_q']; echo" / "; echo $row['idlace_p'];?></td>
                    <td><button></button></td>
                </tr>
                <?php }?>
        </table> 
    </section>

    <section class="sales-section">

    </section>
    <footer>
        <div class="footer">
                <p class="Copyright">Copyright © 2023 CDM Uniform Ordering System</p>
        </div>
    </footer>
</body>
</html>