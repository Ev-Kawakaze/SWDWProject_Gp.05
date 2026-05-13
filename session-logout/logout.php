<?php
include "01_ConnectDB.php";
session_unset();
session_destroy();
    //https://www.w3schools.com/php/func_network_headers_sent.asp 
    /*
    要定向到的文件未知
    */
header("Location : home.php");
?>