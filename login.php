<?php
$servername="localhost";
$username="root";
$pass="";
$database="miniproject";
$conn=new mysqli($servername,$username,$pass,$database);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
echo "connection estabilished sucssesfullly";
?>