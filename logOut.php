<?php
session_start();
/*
if (isset($_GET['functionToCall']) && function_exists($_GET['functionToCall'])) {
    call_user_func($_GET['functionToCall']);
}

function logout(){ */

    //Deletes all data from session and destroys it
    unset($_SESSION['user']);
    session_destroy();
header("Location: /LogInForm/landingPage.php");;




