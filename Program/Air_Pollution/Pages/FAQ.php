<?php 
include ('Header.php');
$connect=mysqli_connect('localhost','root','','Air_Pullution');
$query="SELECT * FROM contact_us_tbl";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
 if (isset($_SESSION['UserID'])) {
     $UserID=$_SESSION['UserID'];
     $PageName="FAQ.php";
     $AccessDate=date('Y-m-d');
     date_default_timezone_set('Asia/Yangon');
     $AccessTime=date('h:i:sa');
     $Insert="INSERT INTO history (PageName,AccessDate,AccessTime,UserID) VALUES ('$PageName','$AccessDate','$AccessTime','$UserID')";
     $ret1=mysqli_query($connect,$Insert); 
 }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
     <h2 align="center">FAQ</h2>
     <p align="center">There are the questions that people frequently ask.</p>
         <?php
              for ($i=0; $i < $count ; $i++) { 
                 $arr=mysqli_fetch_array($result);
                 $no=$i+1;
                 echo "Questions (".$no.") : ";
                 echo $arr['Questions'];
                 echo "<br>";
                 echo "Answer (".$no.") :";
                 echo $arr['Answer'];
                 echo "<br>";
              }
          ?>
          
          <br>
          <a href="ContactUs.php"><input type="button" value="ContactUs"></a>
 </body>
 </html>
 <br>
 <?php include ('Footer.php');?>