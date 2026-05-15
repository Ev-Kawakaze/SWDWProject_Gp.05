<?php
include("menu.php");
include("priceName.php");
?>
<link rel="stylesheet" href="clothes.css">
<div class="page-title">
    <h2>Clothes Collection</h2>
    <p>Select your favorite BNBU clothing items</p>
</div>

<form action="purchase.php" method="POST">

<div class="product-container">

    <div class="product-card">
        <img src="images/ancientShirt.jpg" width="180">
        <h3>Ancient Shirt</h3>
        <p>$<?php echo $prices["ancientShirt"]; ?></p>
        Quantity:
        <input type="number" name="ancientShirt" value="0" min="0">
    </div>

    <div class="product-card">
        <img src="images/cap.jpg" width="180">
        <h3>Cap</h3>
        <p>$<?php echo $prices["cap"]; ?></p>
        Quantity:
        <input type="number" name="cap" value="0" min="0">
    </div>

    <div class="product-card">
        <img src="images/cultureShirt.jpg" width="180">
        <h3>Culture Shirt</h3>
        <p>$<?php echo $prices["cultureShirt"]; ?></p>
        Quantity:
        <input type="number" name="cultureShirt" value="0" min="0">
    </div>

    <div class="product-card">
        <img src="images/poloShirt.jpg" width="180">
        <h3>Polo Shirt</h3>
        <p>$60</p>
        Quantity:
        <input type="number" name="poloShirt" value="0" min="0">
    </div>

</div>

<div class="submit-area">
    <input type="submit" value="Submit Purchase" class="submit-btn">
</div>

</form>