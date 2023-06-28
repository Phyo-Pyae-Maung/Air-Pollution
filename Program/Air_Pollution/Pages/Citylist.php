<?php 
include ('Header.php');
$connection=mysqli_connect('localhost','root','','Air_Pullution');
if (isset($_POST['btnSearch'])) {
    $CityName=$_POST['txtCityName'];
    $query="SELECT * FROM city WHERE CityName='$CityName'";
    $result=mysqli_query($connection,$query);
}
else if (isset($_POST['btnShowAll'])) {
    $query="SELECT * FROM city ORDER BY CityName";
     $result=mysqli_query($connection,$query);
}
else{
    $query="SELECT * FROM city ORDER BY CityName";
     $result=mysqli_query($connection,$query);
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
 <h2 align="center">City List</h2>
     <form action="Citylist.php" method="POST">
     Seach by City Name: <input type="text" name="txtCityName">
     <br>
     <input type="submit" name="btnSearch" value="Seach">
     <br>
     <input type="submit" name="btnShowAll" value="Show All">
     <table border='1'>
     </form>
         <?php
         $count=mysqli_num_rows($result);
         if ($count==0) {
             echo "Search Record Not Found";
         }
         else{
             echo "<table border='1'>
             <tr>
                <th>City Name</th>
                <th>Air Pollution Rate</th>
             </tr>";
         for ($i=0; $i < $count ; $i++) { 
             $arr=mysqli_fetch_array($result);
             echo "<tr>";
             echo "<td>".$arr['CityName']."</td>";
             echo "<td>".$arr['PollutionRate']."</td>";
             echo "</tr>";
             }
             echo "</table>";
         }
        ?>
 </body>
 </html>
<div class="mapouter">
<div class="gmap_canvas">
<iframe width="100%" height="600px" id="gmap_canvas" src="https://maps.google.com/maps?q=Yangon&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
</iframe>
<a href="https://123movies-to.org/%22%3E123 movies free online"
</a></div>
<style>.mapouter{position:relative;text-align:right;height:600px%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:600px;width:100%;}
</style>
</div>

 <?php include ('Footer.php');?>

