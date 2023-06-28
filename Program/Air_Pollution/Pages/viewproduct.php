<?php 
include ('Header.php');
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form action="user_update.php" method="POST" enctype="multipart/form-data">
<table align="center" border="1">
   <div id="footer" class="carousel-container"> 
       <div class="carousel-content"></div><br>
          <h1 align="center"></h1><br>
          <br>
       <tr><br>
         <h1 align="center"><b>View of Products</b></h1>
        <td>Product ID</td>
        <td>Product Name</td>
        <td>Product Image</td>
        <td>Type</td>
        <td>Quantity</td>
        <td>Price</td>
        <td>Action</td>
    </tr><br>
    <?php 
    $connection=mysqli_connect("localhost","root",'',"Air_Pullution");
     $select="SELECT * FROM product_tbl";
     $result=mysqli_query($connection,$select);
     if ($result){
     $count=mysqli_num_rows($result);
     for($i=0; $i <$count ; $i++){
     $arr=mysqli_fetch_array($result);
     echo "<tr>";
     echo "<td>".$arr['ProductID']."</td>";
     echo "<td>".$arr['ProductName']."</td>";
     echo "<td><img src='".$arr['ProductImage']."' width='150px'> </td>";
     echo "<td>".$arr['Type']."</td>";
     echo "<td>".$arr['Quantity']."</td>";
     echo "<td>".$arr['Price']."</td>";
    echo "<td><a href='ProductUpdate.php?PID=".$arr['ProductID']."'>Update</a> || <a href='ProductDelete.php?PID=".$arr['ProductID']."'>Delete</a></td>";
     echo "</tr>";
}
}
else{
echo mysqli_error();
}
?>
   </div><br>
</table><br>
</form>
</body>
</html>
<?php 
include ('Footer.php');
?>