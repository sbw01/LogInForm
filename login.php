<?php
ini_set("display_errors", 1);

$servername = "localhost";
$username = "root";
$password = "Sebastian11082003!";
$dbName = "mydb";


$conn = new mysqli($servername, $username, $password, $dbName);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginname = $_POST["fname"];
    $loginpass = $_POST["lname"];
    $loginmail = $_POST["gname"];
    $checkQuery = "SELECT * FROM users WHERE username = '" . $loginname . "' AND password = '" . $loginpass . "' AND userID = 1 AND EMAIL = '" . $loginmail . "'";
    $result = $conn->query($checkQuery);

    if (!mysqli_query($conn, $checkQuery)) {
        echo ' Query error: ' . mysqli_error($conn);
    }
    $user = $result->fetch_assoc();

    echo "Welcome " . $user["username"];
}
$conn->close();
?>

<link rel="stylesheet" href="CSS/loginForm.css">

<h1>Have an account?</h1>
<a href="index.php"> Log In !</a>
<a href="Forms/signUp.php"> Sign Up !</a>





