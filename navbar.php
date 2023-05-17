<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar Template</title>
    <link href="CSS/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <nav class="nav-bar1">
        <a href="landingPage.php" class="nav-logo1"><span>gym</span>shoppen</a>
        <ul class="main-menu1">
            <li><a href="landingPage.php"></a>Home</li>
            <li><a href="logIn.php"></a>Services</li>
            <li><a href="#"></a>Products</li>
            <li><a href="#"></a>About</li>
            <li><a href="#"></a>Contact</li>
            <form action="search.php" method="GET" id="search">
                <div class="input">
                    <input type="text" placeholder="Search..." id="mysearch" class="search" name="search">
                    <span class="clear" onclick="test()"></span>
                </form>
            <div class="action">
                <li><i class="fas fa-user-astronaut" onclick="dropdown()"></i></li>
                <div class="menu">
                    <h3><?php
                        //Checks if user is logged in by checking data
                        if (!isset($_SESSION['user'])) {
                            echo '<h3><span class="loginbtn" onclick="loginPage()">login</span></h3>';
                        } else {
                            session_start();
                            echo 'Welcome ' . $_SESSION['user']['username'];
                            echo "<br><span>WebDeveloper</span></h3>";
                            echo '<li><a href="#">My Profile</a></li>';
                            echo '<li><a href="#">Edit Profile</a></li>';
                            echo '<li><a href="#">Inbox</a></li>';
                            echo '<li><a href="#">Settings</a></li>';
                            echo '<li><a href="#">Help</a></li>';
                            echo '<li><a href="logOut.php">Logout</a></li>';

                        }
                        ?>
                </div>
            </div>
        </ul>
    </nav>
</body>
</html>

<script src="utilities.js"></script>


