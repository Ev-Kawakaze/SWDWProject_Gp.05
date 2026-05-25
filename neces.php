<?php
include("priceName.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Necessities</title>
    <link rel="stylesheet" href="style.css">

    <script>

function validateForm(){

    let calendar =
        document.forms["purchaseForm"]["calendar"].value;

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

<h1>Necessities</h1>

<form name="purchaseForm" action="purchase.php" method="post" onsubmit="return validateForm()">
    <input type="hidden"
       name="category"
       value="neces">

    <table border="1">
        <tr>
            <th>Image</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>

<tr>

    <td>
        <img src="images/calendar.jpg" width="100">
    </td>

    <td>
        calendar
    </td>

    <td>
        $<?php echo $prices["calendar"]; ?>
    </td>

    <td>
        <input type="number"
               name="calendar"
               min="0"
               max="9"
               value="0">
    </td>

</tr>

<tr>

    <td>
        <img src="images/fan.jpg" width="100">
    </td>

    <td>
        fan
    </td>

    <td>
        $<?php echo $prices["fan"]; ?>
    </td>

    <td>
        <input type="number"
               name="fan"
               min="0"
               max="9"
               value="0">
    </td>

</tr>

<tr>

    <td>
        <img src="images/mugs.jpg" width="100">
    </td>

    <td>
        mugs
    </td>

    <td>
        $<?php echo $prices["mugs"]; ?>
    </td>

    <td>
        <input type="number"
               name="mugs"
               min="0"
               max="9"
               value="0">
    </td>

</tr>

<tr>

    <td>
        <img src="images/umbrella.jpg" width="100">
    </td>

    <td>
        umbrella
    </td>

    <td>
        $<?php echo $prices["umbrella"]; ?>
    </td>

    <td>
        <input type="number"
               name="umbrella"
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