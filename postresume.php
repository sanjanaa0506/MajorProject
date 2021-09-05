 
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"pd");
?>

<html>
<head>
<title>
</title>
<style type="text/css">
body
{
background-image:url(a11.png);
background-size:cover;
width:900px;
height:900px;
}

.aa
{
width:300px;
height:800px;
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


.aa input[type="password"]
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

.ff input[type="submit"]
{
width:120px;
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
<body>
<div class="aa">
<br><br>
<h3>For Candidate</h3>
<h4> Post Resume</h4>
Name:<input type="text" name="Name" placeholder="Name"><br><br>
Email:<input type="text" name="Email" placeholder="Email"><br><br>
Location:<input type="text"  name="Location" placeholder="Location"><br><br>
Number:<input type="number" name="Number" placeholder="Number"><br><br>
Category:<input type="text" name="Category" placeholder="Category"><br><br>
Experiance:<input type="text" name="Experiance" placeholder="Experiance"><br><br>
KeySkill:<input type="text" name="KeySkill" placeholder="KeySkill"><br><br>
<input type="submit" name="submit" value="submit" >
</form>
</div>

<font color="white">
<?php


if(isset($_POST["submit1"]))
{
$res=mysqli_query($link,"select * from tt2 where Location='$_POST[Location]'");
echo "<center>";

while($row=mysqli_fetch_array($res))
{
echo $row["Name"]; echo "<br>";
}

echo "</center>";
}

if(isset($_POST["submit"]))
{
mysqli_query($link,"insert into tt2 values('$_POST[Name]','$_POST[Email]','$_POST[Location]','$_POST[Number]','$_POST[Category]','$_POST[Experiance]','$_POST[KeySkill]')");
}

?>
</font>
</body>
</html>