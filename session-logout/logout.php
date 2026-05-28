<?php
include "01_ConnectDB.php";
session_unset();
session_destroy();
    //https://www.w3schools.com/php/func_network_headers_sent.asp 
header("Location : home.php");
?>
