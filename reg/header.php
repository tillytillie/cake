<?php
session_start();
?>
<!DOCTYPE html>
<html>
<lang='en'>

    <head>
    <meta name="viewport" content="width=device-width, initialscale=1">
<meta charset="utf-8">
        <title>Login system</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
        <script src="data.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

        <!-----------------------header------------------>
               <header>
              <div class="header" id="myHeader">
               <div class="row">
                <div class="col-xs-6">
 <a href="index.php"><img src="img/logo.png" alt="logo"> </a>
  </div>
     </div>
 </div>
  
  <!-----------------------Login------------------>
  <div class="header">
    <div class="container">
    <div class="row">
    <div class="col-md-4">
            <?php
         if(isset($_SESSION['userid'])){
          echo  '<form action="includes/logout.inc.php" method="POST">
          <button class="btn btn-warning" type="submit" name="logout-submit">Logout</button>
          </form>';
        
      }
      else {
          echo '<form action="includes/login.inc.php" method="POST">
           <input type="text" name="mailuid" placeholder="Username/E-mail..."> <br/>
          <input type="password" name="pwd" placeholder="Password....">
          <button class="btn btn-primary" type="submit" name="login-submit">Login</button>
          </form>
          <a class="link link-active" href="signup.php">Signup</a>
          
      </form>';
      }
      if(isset($_GET['error'])) {
         if($_GET['error'] == "emptyfields"){
        echo '<p class="alert alert-warning"> Fill in all fields!</p>';
        }
        else if($_GET['error']  == "wrongpwd"){
          echo '<p class="alert alert-warning">Incorrect password or Username!</p>';
         }
         else if($_GET['error']  == "nouser"){
          echo '<p class="alert alert-warning">Invalid login details!</p>';
         }
        
      }

?>

</div>
      </div>
</div>
    </div>
    </div>
  </div>
  </header>
    </body>
    </html>