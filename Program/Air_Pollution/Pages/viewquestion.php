<?php 
include ('Header.php');
$connection=mysqli_connect("localhost","root","","Air_Pullution");

    if (isset($_SESSION['UserID'])) {
        $UID=$_SESSION['UserID'];
        $query="SELECT * FROM user WHERE UserID = '$UID'";
        $result= mysqli_query($connection,$query);
        $arr = mysqli_fetch_array($result);
    }
    else{
        echo "<script>alert('Please Login First.');</script>";
        echo "<script>window.location='login.php';</script>";
    }


 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h2 align="center">View Questions</h2>
     <p align="center">These are the questions that people asked.</p>
<table border="1">
    <tr>
        <td>Question</td>
        <td>Answer</td>
        <td>User Name</td>
        <td>Question Date</td>
        <td>Question Time</td>
        <td>Action</td>
    </tr>
    <?php 
    $select="SELECT c.*,u.* from contact_us_tbl c,User u where c.UserID = u.UserID";
    $result=mysqli_query($connection,$select);
    if ($result) {
        $count=mysqli_num_rows($result);
        for ($i=0; $i < $count ; $i++) { 
            $arr=mysqli_fetch_array($result);
            echo "<tr>";
            echo "<td>".$arr['Questions']."</td>";
            echo "<td>".$arr['Answer']."</td>";
            echo "<td>".$arr['FullName']."</td>";
            echo "<td>".$arr['QuestionDate']."</td>";
            echo "<td>".$arr['QuestionTime']."</td>";
            echo "<td><a href='Answer.php? QID=".$arr['ContactUsID']."'>Answer</a></td>";
            echo  "</tr>";
            }
    }
    else
        {
          mysqli_error ($connection);
        }
?>
</table>
</body>
</html>
 </body>
 </html>
 <?php include ('Footer.php');?>