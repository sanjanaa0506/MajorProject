<?php
require_once'login.php';
$conn=new mysqli($servername,$username,$pass,$database);
$query="insert into minitable values ('prajyoti',17,20,122)";
$result=$conn->query($query);
if(! $result)
{
die("database not access".$conn->error);
}
echo "<br>inserted values";
?>