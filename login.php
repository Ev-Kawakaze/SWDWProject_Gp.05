<?php session_start(); ?>
<?php
include 'connectDB.php';
include 'menu.php';
/*$servername = "localhost";
$username 	= "root";
$password 	= "";
$db = "members";
$conn = new mysqli($servername, $username, $password, $db);*/
$msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //https://www.w3ccoo.com/php/php_superglobals_request.html
    $user = $_POST["usr"];
    $pwd  = $_POST["pwd"];
    $sql = "SELECT * FROM members WHERE username = '$user' AND password = '$pwd'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        $_SESSION['user'] = $user;
        $msg = "$user and $pwd are found in the DB. Login successful!";
    }else{
        $msg = "$user and $pwd are NOT found in the DB. Login failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <div id="div1">
        <h1>Login</h1>
    </div>
    <div id="div3">
        <h2>Login Member</h2>
        <?php if ($msg != "") { ?>
            <p>
                <?php echo $msg; ?>
            </p>
        <?php } ?>
        <form action="" method="POST">
            <label for="usr">username:</label><br>
            <input type="text" id="usr" name="usr" placeholder="Username"><br>
            <label for="pwd">password:</label><br>
            <input type="password" id="pwd" name="pwd" placeholder="Password"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div> 
</body>
</html>
