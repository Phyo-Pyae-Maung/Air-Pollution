<?php
include ('Header2.php');
	$connect = mysqli_connect('localhost','root','','Air_Pullution');
	if (isset($_POST['btnRegister'])) 
	{
	 $StaffID=$_POST['txtStaffID'];
	 $StaffName=$_POST['txtStaffName'];
	 $Email=$_POST['txtEmail'];
	 $Password=$_POST['txtPassword'];
	 $DOB=$_POST['txtDOB'];
	 $Phone=$_POST['txtPhone'];
	 $Address=$_POST['txtAddress'];


	 $insert="INSERT INTO Staff VALUES ('$StaffID','$StaffName','$Email','$Password', '$DOB', '$Phone', '$Address')";
	 $result = mysqli_query($connect,$insert);
	 if ($result) 
	 {
	 	echo "<script>alert('Staff Register Successful.');</script>";
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
 	<form action="staff_reg.php" method="Post">
 <h2 align="center">Staff Register</h2>
    <p align="center">Please fill in this form to create a staff account.</p>
 		<table>
 			<tr>
 				<td>StaffID</td>
 				<td><input type="text" name="txtStaffID" required></td>
 			</tr>
 			<tr>
 				<td>StaffName</td>
 				<td><input type="text" name="txtStaffName" required></td>
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
 				<td>Phone</td>
 				<td><input type="text" name="txtPhone" required></td> 				
 			</tr>
 			<tr>
 				<td>Address</td>
 				<td><input type="text" name="txtAddress" required></td> 				
 			</tr>
 			<tr>
 				<td></td>
 				<td><input type="submit" name="btnRegister" placeholder="Register"></td> 				
 			</tr>
 		</table>
 	</form>
 </body>
 </html>
 <?php include ('Footer.php');?>