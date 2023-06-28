<?php 
include ('Header.php');
$connect=mysqli_connect('localhost','root','','Air_Pullution');
if (isset($_SESSION['LoginCount'])) {
if($_SESSION['LoginCount']>=3){
    echo "<script>alert('Please wait 10 minutes');</script>";
    echo "<script>window.location='stafftimer.php';</script>";
    }
}
else {
    $_SESSION['LoginCount']=1;
}
if (isset($_POST['btnLogin'])) {
    $Email = $_POST['txtEmail'];
    $Password = $_POST['txtPassword'];
    $select = "Select * From staff
    Where Email = '$Email' AND Password = '$Password'";
    $ret = mysqli_query($connect,$select);
    $count = mysqli_num_rows ($ret);
    if ($count>0){
        $arr= mysqli_fetch_array($ret);
        $_SESSION['StaffID']= $arr['StaffID'];
        echo "<script>alert('Log in Successful.');</script>";
        echo "<script>window.location='Header2.php';</script>";
    }
    else{
        $_SESSION['LoginCount']++;
        echo"<script>alert('Incorrect Email or Password.');</script>";
            }
    }
 ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="stafflogin.php" method="POST">
<h2 align="center">Staff Login</h2>
    <p align="center">Please Login to your staff account.</p>
        <table>
            <tr>
                <td>Staff Email</td>
                <td><input type="email" name="txtEmail" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="txtPassword" required></td>
            </tr>
            <tr>
            <td></td>
                <td><input type="submit" name="btnLogin" value="LOG IN"></td>
            </tr>
        </table>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php include ('Footer.php');?>