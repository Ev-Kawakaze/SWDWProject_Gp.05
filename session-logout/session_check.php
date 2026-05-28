<?php
session_start();
if(!(isset($_SESSION["username"]))){
    echo "Please login first";
    //https://www.w3schools.com/php/func_network_headers_sent.asp 
    header("Location : login.php");
}else{
    echo "Welcome, ".$_SESSION["username"];
}







?>
