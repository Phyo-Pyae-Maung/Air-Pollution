<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        p{
            text-align: center;
            font-size : 30px;
            margin-top : 0px;
        }
    </style>
    <title></title>
</head>
<body>
    <p id="Timer"></p>
<script>
    var month = new Date().getMonth()+1;
    var day = new Date().getDate();
    var year = new Date().getFullYear();
    var hour = new Date().getHours();
    var minute = new Date().getMinutes()+10;
    var second = new Date().getSeconds();
    var time= hour+":"+minute+":"+second;
    var ResetTime = new Date(month+" "+day+","+year+" "+time).getTime();
    var x = setInterval(function()
    {
        var now = new Date().getTime();
        var distance = ResetTime - now;
        var hour = Math.floor((distance % (1000 * 60 * 60 * 60)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000* 60)) / 1000);
        document.getElementById('Timer').innerHTML = "<h1>Please Try again in</h1>" + minutes+"m"+seconds+"s"+"<h1> To Login Again.</h1>";
        if (distance<0) {
            clearInterval(x);
            location='login.php';
            document.getElementById('Timer').innerHTML="";
        }
    }, 1000);
</script>
</body>
</html>