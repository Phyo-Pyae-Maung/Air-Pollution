<?php

 include('Header.php');

$connection=mysqli_connect("localhost","root","","Air_Pullution");

 if (isset($_SESSION['UserID'])) {

     $UserID=$_SESSION['UserID'];

     $query="SELECT * FROM user

             WHERE UserID='$UserID'";

     $result=mysqli_query($connection,$query);

     $arr=mysqli_fetch_array($result);

     if ($arr['FreeKit']=='Claim') {

         echo "<script>alert('Already Claimed.')</script>";

         echo "<script>window.location='Home.php';</script>";

     }

 }

 if (isset($_POST['btnGet'])) {

     $UserID=$_SESSION['UserID'];

     $query="UPDATE user SET

             FreeKit='Claim'

             WHERE UserID='$UserID'";

     $result=mysqli_query($connection,$query);

     if ($result) {

         echo "<script>alert('Claimed Successful.')</script>";

         echo "<script>window.location='Home.php';</script>";

     }

 }

  ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
     <form action="free_gift.php" method="POST">
     <table align="center">

<h5 class="heading" align="center">Get Your Free Kit</h5>
         <caption>Free Air Qualtity Detector</caption>
         <tr>
             <td><img src="../Pages/images/demo/tool3.jpg" width="300px"></td>
         </tr>
         <tr>
             <td>Indoor Air Pollution Testing Kit (Pro)</td>
         </tr>
         <tr>
             <td><input type="submit" name="btnGet" value="Claim"></td>
         </tr>
     </table>
    </form>
 </body>
 </html>
 <?php 
include('Footer.php')
 ?>