<?php

// including error reports ie prints errors to screen
error_reporting(E_ALL);
ini_set('display_errors', 1);

// adding external php files
include_once ("db_conn.php");
include_once ("db_helper.php");


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Open the connection to the database
    $conn = openConn();

    //check if fields are empty
    if(emptyFieldsLogin($username, $password)){
        header("location: ../login.php?error=fields are empty");

        echo "fields are empty";
    }
        
    else{
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
         //getting result from query
        $result = mysqli_query($conn, $sql);

        //if query works
         if ($result) {

             if($result && mysqli_num_rows($result)>0){
                 //assigning data to an array calles user_data

                $user_data = mysqli_fetch_assoc($result);
                //global variable $_SESSION assigns the session id to the user id 
                //Simply stating that user is logged in
                $_SESSION['id'] = $user_data['id'];  
                //redirect to homepage
                header("location: ../index.php");
            }
            else {
                header("location: ../login.php?error=Invalid username or password");
                echo "Invalid username or password";
            }
         }
         
         

         
    }


}
    
?>