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
$regMsg = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $user = $_POST["usr"];
    $pwd  = $_POST["pwd"];
    $sql = "SELECT * FROM members WHERE username = '$user' AND password = '$pwd'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        $_SESSION['user'] = $user;
        $msg = "Login successful!";
    }else{
        $msg = "$user are NOT found in the DB. Login failed!";
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $rUser = trim($_POST["r_usr"]);
    $rPhone = trim($_POST["r_phone"]);
    $rPwd = $_POST["r_pwd"];
    $rPwd2 = $_POST["r_pwd2"];

    if ($rPwd !== $rPwd2) {
        $regMsg = "Passwords do not match!";
    } else {
        $checkSql = "SELECT username FROM members WHERE username = '$rUser'";
        $checkResult = mysqli_query($conn, $checkSql);
        if (mysqli_num_rows($checkResult) > 0) {
            $regMsg = "Username already exists!";
        } else {
            $insertSql = "INSERT INTO members (username, phone, password) 
                          VALUES ('$rUser', '$rPhone', '$rPwd')";
            
            if (mysqli_query($conn, $insertSql)) {
                $regMsg = "Registration successful! Please login.";
            } else {
                $regMsg = "Registration failed: " . $conn->error;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="div1">
        <h1>Login</h1>
    </div>


    <div id="div3">
        <h2>Login Member</h2>
        <?php if ($msg != "") { ?>
            <p><?php echo $msg; ?></p>
        <?php } ?>
        <form action="" method="POST">
            <label for="usr">username:</label><br>
            <input type="text" id="usr" name="usr" placeholder="Username"><br>
            <label for="pwd">password:</label><br>
            <input type="password" id="pwd" name="pwd" placeholder="Password"><br><br>
            
       
            <input type="submit" name="login" value="Submit">
        </form>
    </div> 


    <div id="div4">
        <h2>Register New Member</h2>
        <?php if (!empty($regMsg)) echo "<p style='color:red;'>$regMsg</p>"; ?>
        <form method="post">
            <label>Username</label><br>
            <input type="text" name="r_usr" required><br><br>

            <label>phone</label><br>
            <input type="text" name="r_phone" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="r_pwd" required><br><br>

            <label>Confirm password:</label><br>
            <input type="password" name="r_pwd2" required><br><br>

            <input type="submit" name="register" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </div>
</body>
</html>