<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"prajyoti");
?>

<html>
<head>
<title>
</title>
<style type="text/css">
body
{
background-image:url(a3.jpg);
width:900px;
height:900px;
}

.aa
{
width:300px;
height:400px;
background-color:rgba(0,0,0,0.5);
margin:0 auto;
margin-top:40px; 
padding-top:10px; 
padding-left:50px;
border-radius:15px;
-wekbkit-border-radius:15px;
-o-border-radius:15px;
-moz-border-radius:15px;
color:white;
font-weight:bolder;
}
.aa input[type="text"]
{
width:200px;
height:35px;
border:0;
border-radius:5px;
-wekbkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
padding-left:5px;
}




.aa input[type="submit"]
{
width:100px;
height:35px;
border:0;
border-radius:5px;
-wekbkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
background-color:skyblue;
}


.aa input[type="number"]
{
width:100px;
height:35px;
border:0;
border-radius:5px;
-wekbkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
background-color:white;
}

</style>
</head>
<body>
<?php $Name="" ?>
<div class="aa">
<form action="" method="post"><br><br>
<h2>Register</h2>
Name:<input type="text" name="Name" 
placeholder="Name" size="40px">
 <?php
if (empty($_POST["Name"])) 
{
    echo " ";
  } else {
    $Name = test_input($_POST["Name"]);  }
 ?>


<br><br>
Number:<input type="number" name="Number" 
placeholder="Number" size="40px">
<br><br>
<input type="submit" name="submit" value="submit" >

</form>
</div>
<?php
if(isset($_POST["submit"]))
{
mysqli_query($link,"insert into prajyoti4 values('$_POST[Name]','$_POST[Number]')");
}
?>

</body>
</html>