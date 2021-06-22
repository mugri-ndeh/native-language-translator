<?php

// error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// adding external php files
include_once ("db_conn.php");
include_once ("db_helper.php");

// if submit button is pushed execute code 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    $conn = openConn();

    // Check if password length is less than 5
    if(!empty($password) && strlen($password)<5){
        header("location: ../signup.php?error1=Password is too short");
        echo "password is too short";
    }
    // Check if fields are empty 
    
    elseif((empty($username) || empty($password) || empty($confirm_password))){
        header("location: ../signup.php?error1=Fields are empty");
        echo "fields are empty";
    }
    // check if passwords match 
    elseif(!passwordCorrect($password, $confirm_password)){
        header("location: ../signup.php?error1=Passwords donot match ");
        echo "passwords donot match";
    }
    //check if username exists
    elseif(usernameExists($username)){
        header("location: ../signup.php?error1=Username exists");
        echo "username exists";
    }
    
    else{
        //query to insery data into database
        $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
        //query the database
         mysqli_query($conn, $sql);
        // redirect to login page to login to home page
         header("location: ../login.php?values='$username','$password','$confirm_password'");
    }


}
    
?>