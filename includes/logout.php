<?php
//start session
session_start();
//if session exist unset the session
if (isset($_SESSION['id'])) {
    //unset session
    unset($_SESSION['id']);
    //redirect to signup page 
    header("location: ../signup.php");
    die;
}