<?php
require_once'login.php';
$conn=new mysqli($servername,$username,$pass,$database);
$query="update minitable set id=56 where name='prajyoti'";
$result=$conn->query($query);
if(! $result)
die("database not access".$conn->error);
echo "updated";
?>