<?php
$msg="";
if(isset($_POST['upload']))
{
$target="prajyoti7/".basename($_FILES['image']['name']);
$db=mysqli_connect("localhost","root","","prajyoti");
$image=$_FILES['image']['name'];
$text=$_POST['text'];
$sql="INSERT INTO prajyoti7(image,text)VALUES('$image',$text')";
mysqli_query($db,$sql);
if(move_uploaded_files($_FILES['image']['tmp_name'],$target))
{
$msg="image uploaded successfully";
}
else{
$msg="image unsuccessfully";
}
}

?>
<html>
<head>
<title>

</title>
<link rel="stylesheet" type="text/css" href="comregistercss.css">
<style type="text/css">

</style>
</head>
<body bgcolor="gray">

<div id="content">
<?php
$db=mysqli_connect("localhost","root","","prajyoti");
$sql="SELECT * FROM prajyoti7";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result))
{echo "<div id='img_div'>";
echo "<img src='/",$row['image'],"'>";
echo "<p>",$row['text'],"</p>";
echo "</div>";
}
?>
<h2>Company Details</h2>

<form method="post" action="" enctype="multipart/form-data" class="example">
<input type="hidden" name="size" value=1000000>
<div><input type="file" name="image"></div>
<div><textarea name="text" rows="4" cols="40"></textarea>	  <br><br>
<div><input type="submit" value="Upload" name="Upload"></div>
</form>
</div>
</body>
</html>