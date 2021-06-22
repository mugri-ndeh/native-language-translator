<?php 
    //including external files
    include_once('head.php');
    include_once('db_conn.php');
    include_once('db_helper.php');

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
    <!-- NAVBAR -->
    <div class="container">
        <h1 class="navitems" id="logo">Mankon Tanslator</h1>
        <nav>
            <ul class="navitems">
                <li><a href="index.php">Home</a></li>
                <!-- hiding or showing navigation items depending on the page -->
                <?php if(isset($_SESSION['id'])){echo "<li><a id=\"translationLink\">Translations</a></li>";}?>
                <?php if(!isset($_SESSION['id'])){echo "<li><a href=\"login.php\">Login</a></li>";}?>
                <?php if(isset($_SESSION['id'])){echo "<li><a href=\"includes/logout.php\">Logout</a></li>";}?>
            </ul>
        </nav> 
    </div>  
