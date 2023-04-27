<?php
session_start();

    //Deletes all data from session and destroys it
    unset($_SESSION['user']);
    session_destroy();
header("Location: /LogInForm/landingPage.php");;




