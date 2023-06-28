
<?php 
include ('Header2.php');
$connection=mysqli_connect("localhost","root","","Air_Pullution");



if (isset($_POST['btnAnswer'])) {
    $CID=$_POST['txtContactusID'];
    $Answer=$_POST['txtAnswer'];
    $update="Update contact_us_tbl SET 
    Answer= '$Answer'
    WHERE ContactUsID='$CID'";
    $ret=mysqli_query($connection,$update);
        if ($ret) {
            echo"<script>alert('Answer successful');</script>";
        }
        else{
            echo mysqli_error($connection);
        }
    }
    if (!isset($_REQUEST['QID'])) {
    echo"<script>window.location='viewquestion.php';</script>";
}
else {
    $ContactUsID=$_REQUEST['QID'];
    $query="SELECT * From contact_us_tbl WHERE ContactUsID ='$ContactUsID' ";
    $result=mysqli_query($connection,$query);
    $arr=mysqli_fetch_array($result);
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
 <h2 align="center">Answers</h2>
     <p align="center">Answer the questions here.</p>
         <form action = "answer.php" method = "POST">
             <input type="hidden" name="txtContactusID" value="<?php echo $arr ['ContactUsID'] ?>">
             <table>
                 <tr>
                     <td>Question</td>
                     <td><input type="text" name="txtquestion" value ="<?php echo $arr ['Questions'] ?>" readonly></td>
                 </tr>
                 <tr>
                     <td>Answer</td>
                     <td><textarea name="txtAnswer" required></textarea></td>
                 </tr>
                 <tr>
                     <td></td>
                     <td><input type="submit" name="btnAnswer" value = "Answer"></td>
                 </tr>
             </table>
         </form>
 
 </body>
 </html>
 <?php include ('Footer.php');?>