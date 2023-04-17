<?php
ini_set("display_errors", 1) ;

$servername = "localhost"; $username = "root"; $password = "Sebastian11082003!"; $dbName = "mydb";


$conn = new mysqli($servername, $username, $password, $dbName);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $newUser = $_POST["name"];
    $newEmail = $_POST["email"];
    $newPass = $_POST["password"];
    $insertQuery = "INSERT INTO users (username, password, EMAIL)
                    VALUES (?,?,?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sss",$newUser, $newPass, $newEmail);
    $stmt->execute();
    header("Location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/signupForm.css">

</head>
<body>
<div class="loginForm">
    <form action="signUp.php" method="POST">
    Sign Up <br><br>
    Username:  <input type="text" id="name" name="name" > <br> <br>
    Email: <input type="email" id="email" name="email"> <br><br>
    Password: <input type="password" id="pass" name="password" > <br><br>
    Confirm Password: <input type="password" id="pass1" name="password1" <br><br>
    <input type="submit" id="submit" name="submit" value="Login"> <br><br>
    Have an account already? <a href="index.php"> Log in!</a>

    </form>
</div>

</body>
</html>