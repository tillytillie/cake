<?php  require 'header.php'?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-xs-2">
       

    <section class="section-default">
    <?php 
    if (isset($_SESSION['userUid'])){
        echo  '<p class="alert alert-success"> You are logged in </p>';
    }
    else {
        echo  '<p class="alert alert-success"> You are logged out</p>';
    }
    ?>
    

   
    </section>
    </div>
    </div>
</main>

<?php require 'footer.php'?>

