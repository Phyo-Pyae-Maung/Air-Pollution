<?php 
include ('Header2.php');
$connect=mysqli_connect('localhost','root','','Air_Pullution');
if (isset($_POST['btnRegister'])){
 $CityID=$_POST['txtCityID'];
 $CityName=$_POST['txtCityName'];
$AirPollutionRate=$_POST['txtAirPollutionRate'];
$Description=$_POST['txtDescription'];
$query="INSERT INTO city VALUES('$CityID','$CityName','$AirPollutionRate','$Description')";
$result=mysqli_query($connect,$query);
if ($result) {
    echo "<script>alert('Register of City Successful.')</script>";
}
else{
    echo "<script>alert('Cannot Register.')</script>";
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h2 align="center">City Register</h2>
     <p align="center">Fill this form to register the new city.</p>
<form action="city_reg.php" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>City ID</td>
            <td><input type="text" name="txtCityID" required></td>
        </tr>
        <tr>
            <td>City Name</td>
            <td><input type="text" name="txtCityName" required></td>
        </tr>
        <tr>
            <td>Air Pollution Rate</td>
            <td><input type="text" name="txtAirPollutionRate" required></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" name="txtDescription" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btnRegister" value="Register" required></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php include ('Footer.php');?>