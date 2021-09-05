<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert Data</title>
</head>
<style>

html,body{
    margin:0;
    height:100%;
    overflow:hidden;
}
img{
    min-height:100%;
    min-width:100%;
    height:auto;
    width:auto;
    position:absolute;
    top:-100%; bottom:-100%;
    left:-100%; right:-100%;
    margin:auto;
}
.container{
height: 100%;
position: relative;
text-align: center;
color: white;
}
.form-wrapper {
width:400px;
height:300px;
  position: absolute;
  top: 50%;
  left: 40%;
  margin: -184px 0px 0px -155px;
  background: rgba(0,7,7,0.44);
  padding: 80px 30px;
  border-radius: 5px;
  box-shadow: 0px 1px 0px rgba(0,0,0,0.6),inset 0px 1px 0px rgba(255,255,255,0.04);
}
form.a input:hover{
	background-color: #666;
}
label{
	width: 200px;
	padding: 0;
	text-align:left;
	font-size: 18px;
}
table{
           position:absolute;
           top:20%;
           left:10%; 

            border:none;
             width:80%;
             height:40%;
             border-collapse:collapse;
}

table, th, td {
  border: none;
  font-size: 20px;
  text-align:left;
  padding: 2px;

}
</style>
<body>
	<div class="container">
	<img src="bg.jpg"/>
	<h2  style="color: white;">Insert Data Here</h2>
<div class="form-wrapper">
<table>
	<tr>
	<td>Group No. :</td>
	<td><input style="border: 2px solid #636C6C;border-radius: 4px; background-color: #95A0A0;font-size: 18px;" type="number" name="grpno" id="grpno"></td>	
	</tr>
	<tr>
	<td>Name :</td>
	<td><input style="border: 2px solid #636C6C;border-radius: 4px; background-color: #95A0A0;font-size: 18px;" type="text" name="name" id="name"></td>	
	</tr>
	<tr>
	<td>Enrollment No. :</td>
	<td><input style="border: 2px solid #636C6C;border-radius: 4px; background-color: #95A0A0;font-size: 18px;" type="text" name="enroll" id="enroll"></td>	
	</tr>
	<tr>
	<td>Project Name :</td>
	<td><input style="border: 2px solid #636C6C;border-radius: 4px; background-color: #95A0A0;font-size: 18px;" type="text" name="pname" id="pname"></td>	
	</tr>
	<tr>
	<td>Year :</td>
	<td><input style="border: 2px solid #636C6C;border-radius: 4px; background-color: #95A0A0; font-size: 18px;" type="number" name="year" id="year"></td>	
	</tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form method="post" action="upll.php" >
<div class="a"><input style="font-size:24px;
  border-radius: 8px;
  border:none;
  background-color: #636C6C;" type="submit" value="&nbsp Submit &nbsp"></div>
</form>
</div>
</body>
</html>