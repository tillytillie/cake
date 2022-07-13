<?php 
 include 'header.php'
?>
<style>
.form-group{
    margin-top: -600px;
    background-color:  #555;
    color: white;
}
.form-control-1 {
    width: 50%;
    height: 30px !important;
    margin-top: 9px;
    margin-left: 30px;
    border: 1px solid black !important;
    border-top-left-radius: 20px !important;
    border-bottom-left-radius: 20px !important;
    border-top-right-radius: 20px !important;
    border-bottom-right-radius: 20px         !important;
    box-shadow: none !important;
}
.input-group-text {
    background: orange !important;
    border: 1px solid black !important;
    margin: 8.5px 10px 3px 0 !important;
    border-top-left-radius: 0px !important;
    border-bottom-left-radius: 0px !important;
    border-top-right-radius: 20px !important;
    border-bottom-right-radius: 20px !important;
    cursor: pointer;
}
label{
    margin-top: 9px;
    margin-left: 30px;
    font-weight: bold;
}
.form-control-2 {
    margin-left: 30px;
    width: 50%;
    height: 30px !important;
    margin-top: 9px;
    border: 1px solid black !important;
    border-top-left-radius: 20px !important;
    border-bottom-left-radius: 20px !important;
    border-top-right-radius: 20px !important;
    border-bottom-right-radius: 20px         !important;
    box-shadow: none !important;
}
#optional {
    margin-left: 30px;
    

}
.btn-primary{
    margin-left: 30px;
    border-radius: 10px;
    background-color: orange;
}

 
@media only screen and (max-width: 980px) {
    .form-group{
    margin-top: -180px;
}

    #optional {
    margin-left: 20px;
    }
    .btn-primary{
    margin-left: 10px;
    border-radius: 10px;
}
.form-control-2 {
    margin-left: 20px;
}
#chat{
    margin-left: 500px;
  
}
}
</style>
<section>
<div class="container">
<div class="row">
<div class="col-lg-12">

<form action="./include/order.php" method="POST"  enctype="multipart/form-data" class="form-group">
<h1 class="text-center">Kindly fill the Form</h1> <hr>
<label class="label control">Full Name: </label> <br>
<input  name="fullname" type="text" class="form-control-1" required> <br>


<label  class="label control">Phone No: </label> <br>
<input name="phonenum" type="tel" class="form-control-1"  placeholder="0800000000" required> <br>

<label  class="label control">Contact Address: </label> <br>
<input name="address" type="text" class="form-control-1"  placeholder="65, akinfowose street, benin-ore road, benin state" required> <br>


<label  class="label control">Cake Code: </label> <br>
<input name="cakecode" type="text" class="form-control-2"  placeholder="ck-100" required> <br>

 <label  id="optional">OR</label> <br>
<label id="optional">upload image(optional): </label> <br>
<input name="cakeimage" type="file" id="optional" > <br> <br>

<button name="submit" type="submit" class="btn btn-primary">Place order</button> <br>
</form>

</div>
</div>


<div class="row">
<div class="col-xs-4" id="chat">
<p class="alert alert-info text-justify">Chat us
                        <a href="https://api.whatsapp.com/send?phone=08168500842"><img src="./images/details/whatsapp.png "></a>
                    </p>



</div></div>
</div>
</div>
</section>
<?php

include 'footer.php';
?>