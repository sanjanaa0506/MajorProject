
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
width:600px;
height:600px;
}

.aa
{
width:300px;
height:250px;
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
<form action="page2val.php" method="POST"><br><br>
<h3>Login:</h3>
<input type="text" name="username" placeholder="please enter username"><br><br>
<input type="text" name="password" placeholder="please enter password"><br><br>
<input type="submit" name="submit" value="Login" onclick="window.open('template.php')" />

</form>


</div>

<?php
if(isset($_POST["submit"]))
{
mysqli_query($link,"insert into prajyoti1 values('$_POST[username]','$_POST[password]')");
}
?>

</body>
</html>