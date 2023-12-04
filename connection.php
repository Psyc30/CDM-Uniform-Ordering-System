<?php

function connection(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cdmuniformorderingsystem";

    $con = new mysqli($host,$username, $password, $dbname );

    if($con->connect_error){
        echo $con->connect_error;
    }
    else{
        echo "connection successful";
        return $con;
    }

}
?>