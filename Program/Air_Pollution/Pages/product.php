<?php
include ('Header2.php'); 
$connection= mysqli_connect('localhost','root','','Air_Pullution');
if (isset($_POST['btnRegister'])){
 $ProductName=$_POST['txtproductname'];
 $folder="../Pages/images/demo/";
 $ProductImage=$_FILES['txtproductimage']['name'];
 if ($ProductImage)
 {
 	$filename=$folder.$ProductImage;
 	$copy=copy($_FILES['txtproductimage']['tmp_name'], $filename);
 	if(!$copy){
 		exit();
 	}
 }
	$ProductName=$_POST['txtproductname'];
	$ProductType=$_POST['cboType'];
	$Quantity=$_POST['txtquantity'];
	$Price=$_POST['txtprice'];
	$insert="INSERT INTO product_tbl (ProductImage,ProductName,Type,Price,Quantity) VALUES ('$ProductImage','$ProductName','$ProductType','$Price','$Quantity')";
	$result=mysqli_query($connection,$insert);
	if ($result) {
		echo "<script>alert('Product register successful.');</script>";
	}
	else{
				echo "<script>alert('Cannot Register.');</script>";

	}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="product.php" method="Post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>ProductImage</td>
				<td><input type="file" name="txtproductimage"></td>
			</tr>
			<tr>
				<td>ProductName</td>
				<td><input type="text" name="txtproductname"></td>
			</tr>
			<tr>
				<td>ProductType</td>
				<td>
					<select name="cboType">
						<?php 
							$select="SELECT * FROM Type";
							$result1=mysqli_query ($connection,$select);
							if ($result1) {
								$count=mysqli_num_rows($result1);
								for ($i=0; $i < $count; $i++) { 
									$arr=mysqli_fetch_array($result1);
									echo "<option value='".$arr['Type']."'>".$arr['Type']."</option>";
								}
								
							}
						 ?>
						<option>IQAir</option>
						<option>Temtop Monitor</option>
						<option>SMILEDRIVE</option>
						<option>LABSOLUTIONS</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="number" name="txtprice"></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="number" name="txtquantity" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnRegister" value="Register"></td>
			</tr>
		</table>

	</form>
</body>
</html>
<?php include ('Footer.php');?>