<?php 
include ('Header.php');
    $connection=mysqli_connect("localhost","root","","Air_Pullution");
    if (isset($_SESSION['UserID'])) {
        $UserID=$_SESSION['UserID'];
        $query="SELECT * FROM User WHERE UserID = '$UserID'";
        $result= mysqli_query($connection,$query);
        $arr = mysqli_fetch_array($result);
    }
    else
    {
        echo "<script>alert('Please Login First.');</script>";
        echo "<script>window.location='login.php';</script>";
    }
    if (isset($_POST['btncontactus'])) {
        $UserID= $_POST['txtuserID']; 
        $Question= $_POST['txtquestion'];
        date_default_timezone_set('Asia/Rangoon');
        $QuestionDate=date('Y-m-d');
        $QuestionTime=date('h:i:sa'); 
        $insert="INSERT into contact_us_tbl (Questions,Answer,UserID,QuestionDate,QuestionTime) VALUES ('$Question','NULL','$UserID','$QuestionDate','$QuestionTime')";
        $ret = mysqli_query($connection,$insert);
        if ($ret) {
            echo"<script>alert('Question ask successful');</script>";
        }
        else{
            echo mysqli_error($connection);
        }
    }
    if (isset($_SESSION['UserID'])) {
     $UserID=$_SESSION['UserID'];
     $PgName="ContactUs.php";
     $AccessDate=date('Y-m-d');
     date_default_timezone_set('Asia/Yangon');
     $AccessTime=date('h:i:sa');
     $Insert="INSERT INTO history (PageName,AccessDate,AccessTime,UserID) VALUES ('$PgName','$AccessDate','$AccessTime','$UserID')";
     $ret1=mysqli_query($connection,$Insert); 
    }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
     <form action = "ContactUs.php" method = "POST">
     <h2 align="center">Contact Us</h2>
     <p align="center">Please ask here, we will respond your answer as soon as posible.</p>
         <input type="hidden" name="txtuserID" value="<?php echo $arr ['UserID'] ?>">
         <table>
             <tr>
                 <td>Questions</td>
                 <td><input type="text" name="txtquestion" required ></td>
             </tr>
             <tr>
                 <td>User Name</td>
                 <td><input type="text" name="txtusername" value = "<?php echo $arr ['FullName'] ?>" readonly></td>
             </tr>
             <tr>
                 <td></td>
                 <td><input type="submit" name="btncontactus" value = "Ask"></td>
             </tr>
         </table>

     </form>
 </body>
 </html>
 <?php include ('Footer.php');?>