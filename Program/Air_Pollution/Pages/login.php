<?php
include('Header.php');
$connection=mysqli_connect('localhost','root','','Air_Pullution');
if (isset($_SESSION['LoginTime'])) {
    $T=time();
    $E=$_SESSION['LoginTime'];
    if ($T>=$E) {
        unset($_SESSION['Fail']);
    }
}
    if (isset($_POST['Fail'])){
        echo "<script>window.location='timer.php';</script>";
    }
if (isset($_POST['btnLogin'])){
 $Email=$_POST['txtEmail'];
 $Password=md5($_POST['txtPassword']);
 echo $select="SELECT * FROM user 
          WHERE Email='$Email'
          AND Password='$Password'";    
 $ret=mysqli_query($connection,$select);
 $count=mysqli_num_rows($ret);
 if ($count>0) {
    $arr=mysqli_fetch_array($ret);
    $_SESSION['UserID']=$arr['UserID'];
    echo "<script>alert('Login Successful.')</script>";
    echo "<script>window.location='Home.php';</script>";
 }
 else{
    if (isset($_SESSION['LoginError'])) 
    {
        $countError=$_SESSION['LoginError'];
        if ($countError==1) 
        {
            $_SESSION['LoginError']=2;
            echo "<script>window.alert('Login failed! Please try again! Error Attempt 2')</script>";
        }
        if ($countError==2) 
        {
            $_SESSION['Fail']='True';
            $_SESSION['LoginTime']=time()+(60+10);
            echo "<script>window.alert('Login failed! Error Attempt 3! Account is Locked for 10mins!!')</script>";
            echo "<script>window.location='timer.php';</script>";
        }
    }
    else
    {
    $_SESSION['LoginError']=1;
    echo "<script>window.alert('Login failed! Please try again! Error Attempt 1')</script>";
    }
  }
}
 if (isset($_SESSION['UserID'])) {
     $UserID=$_SESSION['UserID'];
     $PageName="Login.php";
     $AccessDate=date('Y-m-d');
     date_default_timezone_set('Asia/Yangon');
     $AccessTime=date('h:i:sa');
     $Insert="INSERT INTO history(PageName,AccessDate,AccessTime,UserID) VALUES ('$PageName','$AccessDate','$AccessTime','$UserID')";
     $ret1=mysqli_query($connection,$Insert); 
    }

 ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
  <h2 align="center">Login</h2>
    <p align="center">Please fill in this form to login to your account.</p>
    <!-- Login Form -->
        <form action="login.php" method="POST">
        <table>
            <tr>
                <td>Email</td>
                <td><input type="email" name="txtEmail" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="txtPassword" required></td>
            </tr>
            <tr>
            <td></td>
                <td><input type="submit" name="btnLogin" placeholder="Log In" value="LOG IN"></td>
            </tr>
        </table>
    </form>
  </div>
</div>
</body>
</html>
<?php include ('Footer.php');?>

