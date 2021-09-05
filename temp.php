 
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"pd");
?>



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
echo "</center>";

?>

