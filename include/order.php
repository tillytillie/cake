<?php 
require 'conn.php';

$fullname=$_POST['fullname']; 
$phonenum= $_POST['phonenum'];
$address=$_POST['address'];
$cakecode=$_POST['cakecode'];
$cakeimage= $_POST['cakeimage'];
$submit=$_POST['submit'];


$sql="INSERT INTO cake_order(Customer_Name,Customer_Num,Customer_Address,cake_code,cake_image)
values('$fullname', '$phonenum', '$address', '$cakecode', '$cakeimage')"; 
 mysqli_query($conn, $sql);
      
   
 header("location:orderinfo.php?=success");

 ?>
 