<?php
include("priceName.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ornaments</title>
    <link rel="stylesheet" href="style.css">

    <script>

function validateForm(){

    let calendar =
        document.forms["purchaseForm"]["brooch"].value;

    if(calendar < 0){

        alert("Quantity cannot be negative");
        return false;

    }
    return true;
}

</script>
</head>

<body>

<?php include("menu.php"); ?>

<h1>Ornaments</h1>

<form name="purchaseForm" action="purchase.php" method="post" onsubmit="return validateForm()">
    <input type="hidden"
       name="category"
       value="orna">

    <table border="1">
        <tr>
            <th>Image</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>

<tr>

    <td>
        <img src="images/brooch.jpg" width="100">
    </td>

    <td>
        brooch
    </td>

    <td>
        $<?php echo $prices["brooch"]; ?>
    </td>

    <td>
        <input type="number"
               name="brooch"
               min="0"
               max="9"
               value="0">
    </td>

</tr>

<tr>

    <td>
        <img src="images/crystal.jpg" width="100">
    </td>

    <td>
        fan
    </td>

    <td>
        $<?php echo $prices["crystal"]; ?>
    </td>

    <td>
        <input type="number"
               name="crystal"
               min="0"
               max="9"
               value="0">
    </td>

</tr>

<tr>

    <td>
        <img src="images/earRings.jpg" width="100">
    </td>

    <td>
        earRings
    </td>

    <td>
        $<?php echo $prices["earRings"]; ?>
    </td>

    <td>
        <input type="number"
               name="earRings"
               min="0"
               max="9"
               value="0">
    </td>

</tr>

<tr>

    <td>
        <img src="images/necklace.jpg" width="100">
    </td>

    <td>
        necklace
    </td>

    <td>
        $<?php echo $prices["necklace"]; ?>
    </td>

    <td>
        <input type="number"
               name="necklace"
               min="0"
               max="9"
               value="0">
    </td>

</tr>

    </table>
<br>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</form>

</body>
</html>