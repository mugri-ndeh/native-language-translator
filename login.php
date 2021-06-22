<?php include_once('includes/head.php')?>

  <section class="login-section">

    <div class="form">
        <h1>Login</h1>
        <form action="includes/signin-action.php" method="POST">
            <div class="form-control">
                <input type="text" name="username" placeholder="username">
            </div>
    
            <div class="form-control">
                <input type="password" name="password" placeholder="password">     
            </div>
    
            <div class="form-control">
                <Button type="submit" class="btn" name="submit">Login</Button>
            </div>
        </form>  
      <p class="re-router"><a href="signup.php">Don't have an account? Register here</a></p>
      <?php if (isset($_GET['error'])) {
        //check if an error exists
            $error = $_GET['error'];
            echo "<p class='error'>$error</p>";
        }?>
      </div>
  </section>

  <?php include_once('includes/footer.php')?>
