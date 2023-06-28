<?php
include ('Header.php');
	$connect = mysqli_connect('localhost','root','','Air_Pullution');
	if (isset($_POST['btnRegister'])) 
	{
	 $UserID=$_POST['txtUserID'];
	 $FullName=$_POST['txtFullName'];
	 $Email=$_POST['txtEmail'];
	 $Password=md5($_POST['txtPassword']);
	 $DOB=$_POST['txtDOB'];
	 $Address=$_POST['txtAddress'];
	 $PostCode=$_POST['txtPostCode'];

	 $insert="INSERT INTO User VALUES ('$UserID','$FullName','$Email','$Password', '$DOB', '$Address', '$PostCode', 'Not Claim')";
	 $result = mysqli_query($connect,$insert);
	 if ($result) 
	 {
	 	echo "<script>alert('User Register Successful.');</script>";
	 }
	 else
	 {
	 	echo mysqli_error($connect);
	 }
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form action="user_reg.php" method="Post">
    <h2 align="center">Register</h2>
    <p align="center">Please fill in this form to create an account.</p>
<table>
 			<tr>
 				<td>UserID</td>
 				<td><input type="text" name="txtUserID" required></td>
 			</tr>
 			<tr>
 				<td>Full Name</td>
 				<td><input type="text" name="txtFullName" required></td>
 			</tr>
 			<tr>
 				<td>Email</td>
 				<td><input type="Email" name="txtEmail" required></td>
 			</tr>
 			<tr>
 				<td>Password</td>
 				<td><input type="Password" name="txtPassword" required></td> 				
 			</tr>
 			<tr>
 				<td>DOB</td>
 				<td><input type="Date" name="txtDOB" required></td> 				
 			</tr>
 			<tr>
 				<td>Address</td>
 				<td><input type="text" name="txtAddress" required></td> 				
 			</tr>
 			<tr>
 				<td>PostCode</td>
 				<td><input type="number" name="txtPostCode" required></td> 				
 			</tr>
 			<tr>
 				<td></td>
 				<td><input type="submit" name="btnRegister" placeholder="Register"></td> 				
 			</tr>
 		</table>

</form>
 </body>
 </html>

<?php include ('Footer.php');
	 ?>


