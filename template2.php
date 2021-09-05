 
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

.div-left{float:left;padding-left:70px;background-color:gray;}
.div-rightt{float:right;padding-right:70px;}

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
<br>
<div class="footer-container">
<br><br><br><br><br><br>
<div class="ff">
<center>
<form action=" " method=post>
<h4>Title:</h4><input type=text name="Title" placeholder="enter title">
<input type=submit name="search1" value="search"><br><br>
<h4> Category:</h4><input type=text name="Category" placeholder="enter category">
<input type=submit name="search2" value="search"><br><br>
<h4>Location:</h4><input type=text name="Location" placeholder="enter Location">
<input type=submit name="search3" value="search">
</form>
</center>
<?php
if(isset($_POST["search1"]))
{
$res=mysqli_query($link,"select * from tt1 where Title='$_POST[Title]'");
echo "<center>";

while($row=mysqli_fetch_array($res))
{
 
   echo $row["Title"]; echo "<br>";
echo $row["Type"];echo "<br>";
echo $row["Location"]; echo "<br>";
 echo $row["Category"];echo "<br>"; 
  echo $row["Name"]; echo "<br>";
  echo "<br>";echo "<br>";echo "<br>";
}

echo "</center>";
}




if(isset($_POST["search2"]))
{
$res=mysqli_query($link,"select * from tt1 where Category='$_POST[Category]'");
echo "<center>";

while($row=mysqli_fetch_array($res))
{
 
   echo $row["Title"]; echo "<br>";
  echo $row["Type"];echo "<br>";
echo $row["Location"]; echo "<br>";
 echo $row["Category"];echo "<br>"; 
  echo $row["Name"]; echo "<br>";
  echo "<br>";echo "<br>";echo "<br>";
   }

echo "</center>";
}

if(isset($_POST["search3"]))
{
$res=mysqli_query($link,"select * from tt1 where Location='$_POST[Location]'");
echo "<center>";

while($row=mysqli_fetch_array($res))
{
 
   echo $row["Title"]; echo "<br>";
echo $row["Type"];echo "<br>";
echo $row["Location"]; echo "<br>";
 echo $row["Category"];echo "<br>"; 
  echo $row["Name"]; echo "<br>";
  echo "<br>";echo "<br>";echo "<br>";
}

echo "</center>";
}

?>
</div>

<div class="div-left"> 
<ul class="footer">
<font color="black">
</ul>
<h3>Job Categories</h3><br>
Advertising<br><br>
Application Programming<br><br>
IT<br><br>
Customer Service<br><br>
HR<br><br>
Engineer<br><br>
Finance<br><br>
Graphic Designer<br><br>
Information Technology<br><br>
Fitness Trainer<br><br>
Film<br><br>
Iterior Design<br><br>
Marketing<br><br>
networking<br><br>
Interior Design<br><br>
Designer<br><br>
Developer<br><br>
Sales<br><br>
Security<br><br>
Teacher<br><br>
Content Writing<br><br>
Consultant<br><br>
Front End Designer<br><br>
back End Designer<br>
<br><br>
<h3>Job Types </h3><br>
Contract<br><br>
Freelance<br><br>
Full Time<br><br>
Part Time<br><br>
</div>
</div>
<br>
<br><br><center>
<h1>Jobs</h1>

<?php

$res=mysqli_query($link,"select * from tt1");
echo "<center>";

while($row=mysqli_fetch_array($res))
{
 echo $row["Title"]; echo "<br>";
  echo $row["Type"];echo "<br>";
echo $row["Location"]; echo "<br>";
 echo $row["Category"];echo "<br>"; 
  echo $row["Name"]; echo "<br>";
echo "<form action='postresume.php'>
<input type='submit' name='ok' value='Apply' /></form>";
 echo "<br>";echo "<br>"; 
  }

echo "<form action='temp.php'>
<input type='submit' name='okkk' value='see more' /></form>";
 echo "<br>";echo "<br>"; 
echo "</center>";
?>

</center>
</center>
</font>
</body>
</html>
