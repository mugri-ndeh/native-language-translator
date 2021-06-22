<?php
    //for error display
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //including external files
    include_once("includes/db_helper.php");
    include_once("includes/db_conn.php");

    //checking if button to add user was pushed then handle event
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        //initialize declared variacles to get information on form
        $english = $_POST['english'];
        $mankon = $_POST['mankon'];
        $category = $_POST['category'];

        // add translations method defined in includes/db_helper
        addTranslations($english, $mankon, $category);
    }

    //checking if delete was clicked and handle event  
    if(isset($_GET['delete'])){
        //inittialize id to id of record selected to delete
        $id = $_GET['delete'];
        //create connection to database
        $conn = openConn();
        //sql query to delete 
        $sql = "DELETE FROM translation WHERE id='$id'";

        //executing query 
        mysqli_query($conn, $sql);
    }

    //check if admin login is not pushed, redirect to admin login page 
    if(!isset($_GET['admin'])){
        header("location: admin-login.php");
        die;
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="admin-adder">
        <div class="admin-adder">
            <form action="" method="POST">
                <div class="form-admin">

                    <div class="form-control-admin">
                        <span>English  </span><input type="text" name="english">
                    </div>
                    <div class="form-control-admin">
                        <span>Mankon  </span><input type="text" name="mankon">
                    </div>
                    <div class="form-control-admin">
                        <span>Category  </span><select name="category" id="">
                            <option value="Greeting">Greeting</option>
                            <option value="Question">Question</option>
                            <option value="Response">Response</option>
                            <option value="Common phrase">Common phrase</option>
                            <option value="Word">Word</option>
                        </select>
                    </div>
                    <div class="form-control-admin">
                        <Button type="submit" class="btn" name="submit">Add</Button>                
                    </div>
                </div>

            </form>
        </div>
    </section>




    <div class="table">
        <table>
            <tr>
                <th>English</th>
                <th>Mankon</th>
                <th>Category</th>
                <th>Action</th>
            </tr>

            <?php
            //for error display
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            //open connection to database
            $conn = openConn();

            //sql query to get all records from translations table in database
            $sql = "SELECT * FROM translation";
            //inititalise result to result from query execution
            $result = mysqli_query($conn, $sql);
            //printing out result to table as long as data exist
                while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?php echo $row['english_word']?></td>
                <td><?php echo $row['mankon_equivalent']?></td>
                <td><?php echo $row['category']?></td>
                <td><a href="admin.php?delete=<?php echo $row['id'];?>" >Delete</a></td>
            </tr>
            <?php endwhile;?>
        </table>
    </div>
    
</body>
</html>