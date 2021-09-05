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
background-image:url(a11.png);
background-size:cover;
width:900px;
height:900px;
}

.aa
{
width:500px;
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


.aa input[type="file"]
{
width:200px;
height:35px;
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
background-color:orange;
}
</style>
</head>
<body>

<div class="aa">
<h2>Company Details</h2>

<form method="post" action="">  
   Title: <input type="text" name="Title">	  <br><br>
 Info: <textarea name="Info" rows="5" cols="40"></textarea>	  <br><br>
 Details:  <textarea name="Details" rows="5" cols="40"></textarea>	  <br><br>
 <input type="submit" name="submit1" value="post">	 
</center>
</form>
</div>
<?php
if(isset($_POST["submit1"]))
{
mysqli_query($link,"insert into prajyoti6 values
('$_POST[Title]','$_POST[Info]','$_POST[Details]')");
}
?>

</body>
</html>