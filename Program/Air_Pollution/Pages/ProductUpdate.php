<?php
include ('Header2.php'); 
$connection= mysqli_connect('localhost','root','','Air_Pullution');
if (isset($_REQUEST['PID'])){
$ProductID=$_REQUEST['PID'];
$selectp="SELECT * FROM product_tbl
          WHERE ProductID='$ProductID'";
$result3=mysqli_query($connection,$selectp);
if ($result3){
   $arr3=mysqli_fetch_array($result3);
}
}
if (isset($_POST['btnUpdate'])) {
  $PID=$_POST['txtProductID'];
  $ProductName=$_POST['txtProductName'];
  $folder="../Pages/images/demo/";
  $ProductImage=$_FILES['txtProductImage']['name'];
  if ($ProductImage) {
     $filename=$folder.$ProductImage;
     $copy=copy($_FILES['txtProductImage']['tmp_name'], $filename);
     if (!$copy) {
        exit();
     }
  }
  $Type=$_POST['cboType'];
  $Quantity=$_POST['txtQuantity'];
  $Price=$_POST['txtPrice'];
  if ($ProductImage) {
   
     $query="UPDATE product_tbl SET 
             ProductName='$ProductName',
             ProductImage='$filename', 
             Type='$Type', 
             Quantity='$Quantity', 
             Price='$Price'
             WHERE ProductID ='$PID'";
             $result=mysqli_query($connection,$query);
             if ($result) {
                echo "<script>alert('Product Update Successful');</script>";
                echo "<script>window.location='viewproduct.php';</script>";
             }
             else{
               echo "<script>alert('Cannot Update.');</script>";
             }
          }
          else{
           echo $query="UPDATE product_tbl SET
                   ProductName='$ProductName',
                   ProductImage='$filename', 
                   Type='$Type', 
                   Quantity='$Quantity', 
                   Price='$Price'
                   WHERE ProductID='$PID'";
                   $result=mysqli_query($query);
                   if ($result) {
                   echo "<script>alert('Product Update Successful');</script>";
                   echo "<script>window.location='viewproduct.php';</script>";
             }
             else{
               echo "<script>alert('Cannot Update.');</script>";
             }
          }
     }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form action="ProductUpdate.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="txtProductID" value="<?php echo $arr3['ProductID']; ?>">
  <table align="center">
   <div id="footer" class="carousel-container"> 
       <div class="carousel-content"></div><br>
          <h1 align="center"></h1><br>
          <br>
      <tr><br>
         <h1 align="center"><b>Product Update</b></h1>
         <td><b>Product Name</b></td>
         <td><input type="text" class="form-control" name="txtProductName" value="<?php $arr3['ProductName']; ?>"></td>
     </tr>
      <tr>
         <td><b>Product Image</b></td>
         <td><input type="file" class="form-control" name="txtProductImage" required></td>
      </tr>
        <tr>
         <td><b>Type</b></td>
         <td>
            <select class="form-control" name="cboType">
               
               <?php 
               $select="SELECT * FROM Type";
               $result1=mysqli_query($connection,$select);
               if ($result1) {
                  $count=mysqli_num_rows($result1);
                  for ($i=0; $i < $count ; $i++) { 
                     $arr=mysqli_fetch_array($result1);
                    echo" <option value='".$arr['Type']."'>".$arr['Type']."</option>";
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
         <td><b>Quantity</b></td>
         <td><input type="number" class="form-control" name="txtQuantity" value="<?php echo $arr3['Quantity']; ?>"></td>
      </tr>
      <tr>
         <td><b>Price</b></td>
         <td><input type="number" class="form-control" name="txtPrice" value="<?php echo $arr3['Price']; ?>"></td>
      </tr>
    <tr>
      <td></td>
      <td class="text-center"><input type="submit" name="btnUpdate" value="Update"></td>
    </tr><br>
  </div><br>
  </table><br>
</form>
</body>
</html>
<?php include ('Footer.php');?>