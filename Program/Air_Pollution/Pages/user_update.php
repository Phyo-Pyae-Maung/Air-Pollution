<?php
include('Header.php');
$connection = mysqli_connect('localhost','root','','Air_Pullution');
if (!isset($_SESSION['UserID'])){
    echo "<script>alert('Please Login First.')</script>";
    echo "<script>window.location='login.php';</script>";
   }
   else{
    $UID=$_SESSION['UserID'];
    $select="SELECT * FROM user
             WHERE UserID='$UID'";
    $result=mysqli_query($connection,$select);
    $arr=mysqli_fetch_array($result);
   }
   if (isset($_POST['btnUpdate'])) {
      $Name=$_POST['txtName'];
      $Email=$_POST['txtEmail']; 
      $OldPassword=md5($_POST['txtOldPassword']);
      $NewPassword=md5($_POST['txtNewPassword']);
      $ConfirmPassword=md5($_POST['txtConfirmPassword']);
      if ($NewPassword==$ConfirmPassword) {
      $UID=$_SESSION['UserID'];
      $select2="SELECT * FROM user WHERE UserID='$UID'";
      $result3=mysqli_query($connection,$select2);
      $arr2=mysqli_fetch_array($result3);
      if ($OldPassword==$arr['Password']) {
         $update2="UPDATE user SET 
                  Password='$NewPassword',
                  FullName='$Name',
                  Email='$Email' 
                  Where UserID='$UID'";
         $ret2=mysqli_query($connection,$update2);
         if ($ret2) {
            unset($_SESSION['UserID']);
            echo "<script>alert('Change Password Successful.');</script>";
            echo "<script>window.location='login.php';</script>";
         }
      }
      else{
         echo "<script>alert('Your Password is not correct.');</script>";
      }
     }
      else{
         echo "<script>alert('New Password and Confirm Password does not match.');</script>";
      }
   }
   
   if (isset($_SESSION['UserID'])) {
      $UserID=$_SESSION['UserID'];
      $PageName="UserUpdate.php";
      $AccessDate=date('Y-m-d');
      date_default_timezone_set('Asia/Rangoon');
      $AccessTime=date('h:i:sa');
      $Insert="INSERT INTO history (PageName,AccessTime,AccessDate,UserID) VALUES ('$PageName','$AccessTime','$AccessDate','$UserID')";
      $result2=mysqli_query($connection,$Insert);
   }
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<link rel="stylesheet" type="text/css" href="box.css">
<body>
   <div align="center">
<form action="user_update.php" method="POST" enctype="multipart/form-data" >
    <table align="center">
   <div class="about" id="about">
                <div class="wrap">
                    <div class="head">
                        <span> </span>
                        <h3>User Update</h3>
                <p align="center">Please fill this to update your account.</p>
                    </div>
            <td><b>Name</b></td>
            <td><input type="text" class="input-box" name="txtName" value="<?php echo $arr['FullName']; ?>"></td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td><input type="text" class="input-box" name="txtEmail" value="<?php echo $arr['Email']; ?>"></td>
        </tr>
      <tr>
         <td><b>Old Password</b></td>
         <td><input type="text"  class="input-box" name="txtOldPassword" placeholder="Your Old Password" required></td>
      </tr>
      <tr>
         <td><b>New Password</b></td>
         <td><input type="text"  class="input-box" name="txtNewPassword" placeholder="Your New Password" required></td>
      </tr>
      <tr>
         <td><b>Confirm Password</b></td>
         <td><input type="text"  class="input-box" name="txtConfirmPassword" placeholder="Your Confirm Password" required></td>
      </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" class="input-box" name="btnUpdate" value="Update">
                
           </td>
        </tr><br>
   </div><br>
</table><br>
</form>
</div>
</body>
</html>
<?php 
include('Footer.php')
 ?>