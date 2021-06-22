<?php include_once('includes/head.php');?>

  <section class="signup-section">
    <div class="form">
        <h1>Register</h1>
        <form action="includes/signup-action.php" method="POST">
            <div class="form-control">
                <input type="text" name="username" placeholder="username">
            </div>
    
            <div class="form-control">
                <input type="password" name="password" placeholder="password">     
            </div>
    
            <div class="form-control">
                <input type="password" name="confirm-password" placeholder="confirm password">       
            </div>

            <div class="form-control">
                <Button type="submit" class="btn" name="submit">Register</Button>
            </div>
        </form>  
        <p class="re-router"><a href="login.php">Already have an account? Login here</a></p>
        <?php if (isset($_GET['error1'])) {
        //check if an error exists
            $error = $_GET['error1'];
            echo "<p class='error'>$error</p>";
        }?>
      </div>
  </section>
  <?php include_once('includes/footer.php')?>
