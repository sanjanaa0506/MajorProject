<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"pd");
?>
<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="upload.css">
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
width:500px;
height:975px;
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
</style>
</head>
<body>
<div class="aa">
<center><h2>JOB DETAILS</h2></center>
<div id="content">
<form method="post" action=" " enctype="multipart/form.data">  
  Title: <input type="text" name="Title">	  <br><br>
  Description: <textarea name="Description" rows="5" cols="40"></textarea><br><br>
  Type: <input type="text" name="Type">	  <br><br>
  Location: <input type="text" name="Location"><br><br>
  Category : <input type="text" name="Category">	  <br><br>
    <h3>COMPANY DETAIL</h3>
   Logo:<input type="text" name="Logo">	  <br><br>
  Name: <input type="text" name="Name">	  <br><br>
  Descriptions: <textarea name="Descriptions" rows="5" cols="40"></textarea>	  <br><br>
  
  <input type="submit" name="submit" value="submit">  	
</div>
</form>

<?php
if(isset($_POST["submit"]))
{
mysqli_query($link,"insert into tt1 values('$_POST[Title]','$_POST[Description]','$_POST[Type]','$_POST[Location]','$_POST[Category]','$_POST[Logo]','$_POST[Name]','$_POST[Descriptions]')");
}
?>

</body>
</html>