<?php

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

require_once('navbar.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/landingPage.css">
</head>
    <body>
        <div class="row">
            <div class="column">
                <div class="card"><p>Enhanced Performance Nutrition's brand new pre-workout has finally hit the market.
                    Mastered and innovated to tackle all aspects of what's truly needed in a pre-workout supplement,
                    without jeopardizing the taste. There's just too many typical,
                    boring and aimless pre-workout supplements on the market.
                    We made sure to formulate a perfectly
                    dosed supplement in order for you to have the best workout possible.</p>
                </div>
            </div>
            <div class="column">
                <div class="card"><img src="https://static.wixstatic.com/media/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png/v1/fill/w_434,h_543,al_c,usm_0.66_1.00_0.01/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png" alt="balistic PWO">
                    <p>Enhanced Performance Nutrition's brand new pre-workout has finally hit the market.
                        Mastered and innovated to tackle all aspects of what's truly needed in a pre-workout supplement,
                        without jeopardizing the taste. There's just too many typical,
                        boring and aimless pre-workout supplements on the market.
                        We made sure to formulate a perfectly
                        dosed supplement in order for you to have the best workout possible.</p></div>
            </div>
            <div class="column">
                <div class="card"><img src="https://static.wixstatic.com/media/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png/v1/fill/w_434,h_543,al_c,usm_0.66_1.00_0.01/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png" alt="balistic PWO">
                    <p>Enhanced Performance Nutrition's brand new pre-workout has finally hit the market.
                        Mastered and innovated to tackle all aspects of what's truly needed in a pre-workout supplement,
                        without jeopardizing the taste. There's just too many typical,
                        boring and aimless pre-workout supplements on the market.
                        We made sure to formulate a perfectly
                        dosed supplement in order for you to have the best workout possible.</p></div>
            </div>
            <div class="column">
                <div class="card"><img src="https://static.wixstatic.com/media/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png/v1/fill/w_434,h_543,al_c,usm_0.66_1.00_0.01/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png" alt="balistic PWO">
                    <p>Enhanced Performance Nutrition's brand new pre-workout has finally hit the market.
                        Mastered and innovated to tackle all aspects of what's truly needed in a pre-workout supplement,
                        without jeopardizing the taste. There's just too many typical,
                        boring and aimless pre-workout supplements on the market.
                        We made sure to formulate a perfectly
                        dosed supplement in order for you to have the best workout possible.</p></div>
            </div>
            <div class="column">
                <div class="card"><img src="https://static.wixstatic.com/media/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png/v1/fill/w_434,h_543,al_c,usm_0.66_1.00_0.01/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png" alt="balistic PWO">
                    <p>Enhanced Performance Nutrition's brand new pre-workout has finally hit the market.
                        Mastered and innovated to tackle all aspects of what's truly needed in a pre-workout supplement,
                        without jeopardizing the taste. There's just too many typical,
                        boring and aimless pre-workout supplements on the market.
                        We made sure to formulate a perfectly
                        dosed supplement in order for you to have the best workout possible.</p>/div>
            </div>
            <div class="column">
                <div class="card"><img src="https://static.wixstatic.com/media/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png/v1/fill/w_434,h_543,al_c,usm_0.66_1.00_0.01/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png" alt="balistic PWO">
                    <p>Enhanced Performance Nutrition's brand new pre-workout has finally hit the market.
                        Mastered and innovated to tackle all aspects of what's truly needed in a pre-workout supplement,
                        without jeopardizing the taste. There's just too many typical,
                        boring and aimless pre-workout supplements on the market.
                        We made sure to formulate a perfectly
                        dosed supplement in order for you to have the best workout possible.</p></div>
            </div>
            <div class="column">
                <div class="card"><img src="https://static.wixstatic.com/media/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png/v1/fill/w_434,h_543,al_c,usm_0.66_1.00_0.01/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png" alt="balistic PWO">
                    <p>Enhanced Performance Nutrition's brand new pre-workout has finally hit the market.
                        Mastered and innovated to tackle all aspects of what's truly needed in a pre-workout supplement,
                        without jeopardizing the taste. There's just too many typical,
                        boring and aimless pre-workout supplements on the market.
                        We made sure to formulate a perfectly
                        dosed supplement in order for you to have the best workout possible.</p></div>
            </div>
            <div class="column">
                <div class="card"><img src="https://static.wixstatic.com/media/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png/v1/fill/w_434,h_543,al_c,usm_0.66_1.00_0.01/6ea1e6_f737af9a0f984c0db4f4f71663bf5703~mv2.png" alt="balistic PWO">
                    <p>Enhanced Performance Nutrition's brand new pre-workout has finally hit the market.
                        Mastered and innovated to tackle all aspects of what's truly needed in a pre-workout supplement,
                        without jeopardizing the taste. There's just too many typical,
                        boring and aimless pre-workout supplements on the market.
                        We made sure to formulate a perfectly
                        dosed supplement in order for you to have the best workout possible.</p></div>
            </div>

        </div>
    </body>
</html>

<script src="./utilities.js"></script>
