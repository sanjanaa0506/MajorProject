 
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"pd");
?>


 <!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">

<link rel="stylesheet" href="stylesheet11.css">


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
.ff input[type="text"]
{
width:500px;
height:35px;
border:10px;
border-radius:5px;
-wekbkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
padding-left:5px;
background-color:gray;
}




</style>	
</head>
<body>
<div id ="menu">
  <ul><li><h1><font size="300">e<font color="orange">JOB</font>Finder</font></h1></li>
<li></li>
<li></li>    
         <li><a href="template.php"><h3>Home</h3></a></li>
      <li><a href="#"><h3>Jobs</h3></a>
      </li>
     <li><a href="company.php"><h3>Companies</h3></a></li>
      
      
     <li><a href="postresume.php"><h3>Post Resume</h3></a>

</li>
  <li><a href="aboutus.php"><h3>About Us</h3></a></li>
     <li><a href="contact.php"><h3>contact Us</h3></a></li>
    
     
</ul>
</div>
<br><br><br><br><br><br>
<div class="ff">
<center>
<form action=" " method=post>
<input type=text name="search" placeholder="enter category you want to search">
<input type=submit name="search" value="search">
</form>
</center>
<?php
if(isset($_POST["search"]))
{
$res=mysqli_query($link,"select * from tt2 where 
Category='$_POST[Category]'");
echo "<center>";

while($row=mysqli_fetch_array($res))
{
 
   echo $row["Name"]; echo "<br>";
echo $row["Email"];echo "<br>";
echo $row["Location"]; echo "<br>";
 echo $row["Number"];echo "<br>"; 
  echo $row["Category"]; echo "<br>";
 echo $row["Experiance"]; echo "<br>";
 echo $row["KeySkill"]; echo "<br>";
  echo "<br>";echo "<br>";echo "<br>";
}

echo "</center>";
}
?>
</div>

</body>
</html>
