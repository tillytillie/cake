<?php  require 'header.php'?>

<main>
    <div class="container">
       <h1>Signup</h1>
    <div class="row">
        <div class="col-xs-3">
    <?php 
        if(isset($_GET['error'])) {
        if($_GET['error'] == "emptyfield"){
        echo '<p class="alert alert-warning"> Fill in all fields!</p>';
   }
         else if($_GET['error']  == "invaliduidmail"){
        echo '<p class="alert alert-warning">invalid Username and e-mail!</p>';
       }
       else if($_GET['error'] == "invaliduid") {
        echo '<p class="alert alert-warning"> invalid Username!</p>';
        
    }
        else if($_GET['error'] == "invalidmail"){
        echo '<p class="alert alert-warning"> invalid e-mail!</p>';
        }
        
        else if($_GET['error'] == "passwordcheck"){
            echo '<p class="alert alert-warning"> Your password do not match!</p>';
            }
         else if($_GET['error'] == "usertaken&mail"){
                echo '<p class="alert alert-warning"> Username is already taken!</p>';
         }

        
        
            echo '<p class="alert alert-success"> sign up successful! <br> You can login </p>';

                }
                    
    ?>
        </div>
    </div>
    
    <div id="login-singup-page">
    <form action="includes/signup.inc.php" method="POST">
   <i class="fa fa-user"> <input type="text" name="uid" placeholder="Username"></i>
   <i class="fa fa-mail"> <input type="text" name="mail" placeholder="E-mail"></i>
   <i class="fa fa-phone"> <input type="tel" name="tel" placeholder="080....." required></i>
   <i class="fa fa-lock"> <input type="password" name="pwd" placeholder="Password"></i>
   <i class="fa fa-lock"> <input type="password" name="pwd-repeat" placeholder="Repeat Password"></i>
    <button class="btn btn-primary" type="submit" name="signup-submit">Signup</button>
</form>
</div>
    </section>
    </div>
</main>

<?php require 'footer.php'?>

