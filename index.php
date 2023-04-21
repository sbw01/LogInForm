<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Sebastian11082003!";
$dbName = "mydb";


$conn = new mysqli($servername, $username, $password, $dbName);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/loginForm.css">

</head>
<body>
<div class="loginForm">
    <form action="landingPage.php" method="POST" class="">
        Login <br><br>
        Username:  <input type="text" id="fname" name="fname" > <br> <br>
        Password: <input type="password" id="lname" name="lname" > <br><br>
        <input type="submit" id="submit" name="submit" value="Login" > <br><br>
        First time? <a href="Forms/signUp.php"> Sign up!</a>

    </form>
</div>
<?php

if (isset($POST['login'])){
    $Username = $_POST['fname'];
    $Pass = $_POST['lname'];
    $select = mysqli_query($conn, "SELECT * FROM users WHERE username = '$Username' AND password = '$Pass'");
    $row = mysqli_fetch_array($select);

    if(is_array($row)){
        $_SESSION["Username"] = $row ['Username'];
        $_SESSION["Pass"] = $row ['Pass'];
    } else {
     echo '<script type = "text/javascript">';
     echo 'alert("Invalid Username or Password")';
     echo 'window.location.href = "index.php"';
     echo '</script>';
    }
}

?>

</body>
</html>