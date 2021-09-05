<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"prajyoti");
?>
<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
   <title>site</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="stylesheet11.css">
<link rel="stylesheet" href="stylesheet22.css">
<style type="text/css">

.ff input[type="submit"]
{
width:150px;
height:35px;
border:0;
border-radius:5px;
-wekbkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
background-color:orange;
}
</style>

 </head>
<body bgcolor="">
<div id ="menu">

  <ul><li><h1><font size="300">e<font color="orange">JOB</font>Finder</font></h1></li>
<li></li>
<li></li>  <font color="white">  
         <li><a href="template.php"><h3>Home</h3></a></li>
      <li><a href="#"><h3>Jobs</h3></a>
      </li>
     <li><a href="company.php"><h3>Companies</h3></a></li>
     <li><a href="postresume.php"><h3>Post Resume</h3></a>

</li>
  <li><a href="aboutus.php"><h3>About Us</h3></a></li>
     <li><a href="contact.php"><h3>contact Us</h3></a></li>
    </ul></font>
<br><br><br><br><br><br>

</div>
<div class="ff">

<?php

$res=mysqli_query($link,"select * from prajyoti6");
echo "<center>";

while($row=mysqli_fetch_array($res))
{
 echo "<b>";echo "<h1>";
   echo $row["Title"];echo "</h1>";
echo $row["Info"];
 echo "<form action='postresume.php'>
<input type='submit' name='ok' value='see' /></form>";
echo "<br>";echo "<br>";
}

if(isset($_POST["submit1"]))
{
$res=mysqli_query($link,"select * from prajyoti6");
echo "<center>";

while($row=mysqli_fetch_array($res))
{

   echo $row["Info"];

}
}
?></div>
</font>
</body>
</html>