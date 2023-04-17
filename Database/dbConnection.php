<?php
$servername = "localhost";
$username = "root";
$password = "Sebastian11082003!";

//Creating connection
$conn = new mysqli($servername, $username, $password);

//Checking connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

?>