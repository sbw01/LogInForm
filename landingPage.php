<?php
require_once('navbar.php');
//Creating session
session_start();

$servername = "localhost";
$username = "root";
$password = "Sebastian11082003!";
$dbName = "mydb";

//Database Connection
$conn = new mysqli($servername, $username, $password, $dbName);


//Checks if username and password matches, afterwars it creates user variabel inside session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginname = $_POST["fname"];
    $loginpass = $_POST["lname"];
    $checkQuery = "SELECT * FROM users WHERE username = '".$loginname."' AND password = '".$loginpass."'";
    $result = $conn->query($checkQuery);
    if (!mysqli_query($conn, $checkQuery)) {
        echo ' Query error: ' . mysqli_error($conn);
    }
    $user = $result->fetch_assoc();

    $_SESSION['user'] = $user;

}

    $conn->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/landingPage.css">
</head>
    <body>

    </body>
</html>

<script src="./utilities.js"></script>

