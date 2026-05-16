<?php
session_start();
?>
<link rel="stylesheet" href="style.css">

<div id="div2">
    <a href="home.php">Home</a> 
    <a href="login.php">Login/Register</a> 
    <a href="clothes.php">Clothes</a> 
    <a href="neces.php">Necessities</a> 
    <a href="orna.php">Ornaments</a>

    <?php
    if(isset($_SESSION["user"])){
        echo " &nbsp;&nbsp; | Welcome, ".$_SESSION["user"]." | <a href='logout.php'>Logout</a>";
    }
    ?>
</div>