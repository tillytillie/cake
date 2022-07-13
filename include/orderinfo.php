<?php 
include_once 'conn.php';
?>

<?php 
$sql = "SELECT * FROM cake_order WHERE Customer_Name='';";
 $result =mysqli_query($conn, $sql);
 $resultCheck = mysqli_num_rows($result);

 if($resultCheck > 0 ){
        while($row =mysqli_fetch_assoc($result)) {
            echo $row['Customer_Name'] . "<br>";
            echo $row['Customer_Num'];
        }
 }
?>
