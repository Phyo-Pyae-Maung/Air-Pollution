<?php 
include ('Header2.php');
     $connection= mysqli_connect('localhost','root','','Air_Pullution'); 
     if (isset($_REQUEST['PID'])) {
     $ProductID=$_REQUEST['PID'];
     $delete="DELETE FROM product_tbl WHERE ProductID='$ProductID'";
     $result=mysqli_query($connection,$delete);
     if ($result) {
      echo "<script>alert('Product Delete Successful.')</script>";
      echo "<script>window.location='viewproduct.php';</script>";
      }
   }
 ?>

 