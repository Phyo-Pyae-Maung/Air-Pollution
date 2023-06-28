<?php
include ('Header.php'); 
$connect=mysqli_connect('localhost','root','','Air_Pullution');
if (isset($_SESSION['UserID'])) {
    $UserID=$_SESSION['UserID'];
    $query="SELECT * FROM history WHERE UserID='$UserID'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
}
else{
    echo "<script>alert('Please Login First.')</script>";
    echo "<script>window.location='login.php';</script>";
}
if (isset($_REQUEST['HID'])) {
    $HistoryID=$_REQUEST['HID'];
    $query1="DELETE FROM history WHERE HistoryID='$HistoryID'";
    $result1=mysqli_query($connect,$query1);
    if ($result1) {
        echo "<script>window.location='ViewHistory.php';</script>";
    }
}
if (isset($_POST['btnClearAll'])) {
    $query2="DELETE FROM history WHERE UserID='$UserID'";
    $result2=mysqli_query($connect,$query2);
    if ($result2) {
        echo "<script>window.location='viewhistory.php';</script>";
    }
}
 ?>
<!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <h2 align="center">User History</h2>
 <body>
     <?php 
         if ($count>0) {
             echo "<form action='viewhistory.php' method='POST'>";
             echo "<table border='1'>
                   <tr>
                       <th>Page Name</th>
                       <th>Access Time</th>
                       <th>Access Date</th>
                       <th>Action</th>
                   </tr>";
             for ($i=0; $i < $count ; $i++) { 
             $arr=mysqli_fetch_array($result);
             echo "<tr>";
             echo "<td>".$arr['PageName']."</td>";
             echo "<td>".$arr['AccessTime']."</td>";
             echo "<td>".$arr['AccessDate']."</td>";
             echo "<td><a href='viewhistory.php?HID=".$arr['HistoryID']."'>Clear</a></td>";
             echo "</tr>";
             }
             echo "<tr>
                   <td colspan='4' align='center'><input type='submit' name='btnClearAll' value='Clear All History'></td>
                   </tr>";
             echo "</table>";
             echo "</form>";
         }
         else
         {
            echo "Not User History" ;
         }
      ?>
 </body>
 </html>

 <?php include ('Footer.php');?>