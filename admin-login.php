<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

    //setting admin username and password
    $admin_un = "admin";
    $admin_pw = "admin";

    //check if login button pushed before handling event
    if($_SERVER['REQUEST_METHOD']=="POST"){

        //set newly declared variables to get the username and password from form
        $username = $_POST['un'];
        $password = $_POST['pw'];

        //check if fileds are empty and login information is correct before being redirected to admin page
        if((!empty($username) && !empty($password))){
            if($username == $admin_un && $password = $admin_pw){
                header("location: admin.php?admin='$username");
            }else {
                header("location: admin-login.php?error=invalid username or password");
                echo "invalid username or password";
            }
        }else {
            header("location: admin-login.php?error=Please fill in credentials");
            echo "Please fill in credentials";
        }
    }









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="welcome-admin">
        <h1>Welcome to the administrative panel</h1>
        <h3>Please login to continue</h3>
    </div>    
    <div class="a-f">
        <form action="" method="post" class="a-f">
            <div class="form-admin-login">
            <h3>Administrator Login</h3>
                <div class="a-form-control">
                     <input type="text" name="un" placeholder="Enter admin username">
                </div>
                <div class="a-form-control">
                    <input type="password" name="pw" placeholder="Enter admin password">   
                </div>
                <div class="a-form-control">
                    <button type="submit">Login</button>
                </div>

                <?php if (isset($_GET['error'])) {
                //check if an error exists
                    $error = $_GET['error'];
                    echo "<p class='error'>$error</p>";
                }?>
            </div>
        </form> 
     </div>    
    
</body>
</html>
  
