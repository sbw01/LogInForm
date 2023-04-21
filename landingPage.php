
<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "Sebastian11082003!";
$dbName = "mydb";


$conn = new mysqli($servername, $username, $password, $dbName);



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
        <section>

            <div class="navbar">
                <div class="navbar-elements">
                    <div class="linksLeft">
                        <a href="#">Contact</a>
                        <a href="#">Catalogue</a>
                    </div>
                    <div class="logo">
                        <h1>GYMSHOPPEN<h1>
                    </div>
                    <div class="linksRight">
                        <a href="#">Om os</a>
                        <div class="dropdown">
                          <p id="profile" class="dropbtn" onclick="dropdown()"
                            <?php
                                if (isset($_SESSION['user']))
                            ?>> <?php echo 'Welcome '. $_SESSION['user']['username'] ?> </p>

                            <div id="dropdownContent" class="dropdown-content">
                                <a href="#">Profile</a>
                                <a href="index.php">Log in</a>
                                <a href="#">Sign in</a>
                                <p <?php unset($_SESSION['user']);
                                session_destroy();
                                ?> onclick="logout()">Log out</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>

<script src="./utilities.js"></script>
<script src="./userLogOn.js"></script>
