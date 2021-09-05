<?php
$server = "localhost";
$user = "root";
$pass = "my";
$dbname = "demo";
 
//Creating connection for mysqli
 
//$conn = new mysql( $user, $pass, $dbname);
 
    mysql_connect("localhost", "root", "my"); 
    mysql_select_db($dbname);
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$grpno = $_POST['grpno'];
$name = $_POST['name'];
$enroll = $_POST['enroll'];
$pname = $_POST['pname'];
$year = $_POST['year']; 


$sql = "INSERT INTO project (grpno,name,enroll,pname,year) VALUES ('$grpno', '$name', '$enroll','$pname','$year')";
mysql_query($sql);
?>