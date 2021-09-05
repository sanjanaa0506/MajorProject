<?php
require_once'login.php';
$conn=new mysqli($servername,$username,$pass,$database);
$query="select*from minitable";
$result =$conn->query($query);
if(!$result)
die($conn->error);
$rows=$result->num_rows;
for($x =0; $x<$rows; $x++)
{
$result->data_seek($x);
echo "name=".$result->fetch_assoc()['name']."<br>";
$result->data_seek($x);
echo "id=".$result->fetch_assoc()['id']."<br>";
$result->data_seek($x);
echo "age=".$result->fetch_assoc()['age']."<br>";
$result->data_seek($x);
echo "phoneno=".$result->fetch_assoc()['phoneno']."<br>";
}
$result->close();
$conn->close();
?>