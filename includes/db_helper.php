<?php
    include_once("db_conn.php");
    ob_start(); //Turns on output buffering
    session_start();
    // function to check if user is already logged in
    function checkIfLoggedIn($con){
        // if session isset ie if a session id exists
        if(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
            // query the database
            $sql = "SELECT * FROM user WHERE id = '$id' limit 1";
            //execute the query
            $result = mysqli_query($con, $sql);

            // if query returns a result
            if($result && mysqli_num_rows($result)>0){
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        // if session id doesnt exist redirect to homepage
        header("location: signup.php?error");
        die;
    }

    // check if password length is greater than 5
    function checkPasswordLength($password){
        return strlen($password);
    }

    // check if passwords match 
    function passwordCorrect($pwd, $cpwd){
        if($pwd==$cpwd){
            return true;
        }
        else{
            return false;
        }
    }

    // check if user has input data in the sign up page
    function emptyFieldsRegiste($un, $pwd, $c_pwd){
        //check if fields are empty 
        if(empty($un) || empty($pwd) || empty($c_pwd)){
            return true;
        }
        else {
            return false;
        }
    }

    function emptyFieldsRegister($un, $pwd, $cpwd){
        if(empty($un) || empty($pwd) || empty($cpwd)){
            return true;
        }
        else {
            return false;
        }
    }

    // check if user has input data in the sign in page
    function emptyFieldsLogin($un, $pwd){
        if(empty($un) || empty($pwd)){
            return true;
        }
        else {
            return false;
        }
    }

    // check if username exists
    function usernameExists($username){
        $conn = openConn();
        //query 
        $sql = "SELECT * FROM user WHERE username = '$username'";
        // execute query and compare result
        $result = mysqli_query($conn, $sql);
        // if result exist 
        if($result){
            // if result exists and the number of rows found is greater than 1
            if($result && mysqli_num_rows($result)>0){
                //set the user data to reslult found from database
                $user_data = mysqli_fetch_assoc($result);
            return true;
                
            }
        }
        else{
            return false;
        }
    }


    //admin add translations
    function addTranslations($english, $mankon, $category){
        //open connection to database
        $conn = openConn();
        //if filedls are not empty execute
        if(!(empty($english) && empty($mankon))){
            $sql = "INSERT INTO translation (english_word, mankon_equivalent, category) VALUES ('$english','$mankon','$category')";
            //execute query
            //check if query was successful
            if(mysqli_query($conn, $sql)){
                echo "Successfully added";
            }
            else {
                echo "Check query";
                echo mysqli_error($conn);

            }
        }else{
            echo "Fields are empty";
        }
        
        
    }

    function translate($con){
        
        if(isset($_POST['search-text'])){

            $text = trim($_POST['search-text']);
            
            //echo $text;
             $sql = "SELECT * FROM translation where english_word='$text'";

             $result = mysqli_query($con, $sql);
             //echo $result;
             //echo mysqli_fetch_assoc($result);

            // if query returns a result
            if($result && mysqli_num_rows($result)>0){
                $translation_data = mysqli_fetch_assoc($result);
                return $translation_data;
            }
            
        }
    }






?>