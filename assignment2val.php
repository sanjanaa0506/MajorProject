<?php
class invalid extends Exception
{}
function test_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
if(isset($_POST['name']))
$name=test_input($_POST['name']);
else
$name=" ";
if(empty($_POST['name']))
echo"name is required<br/>";
if(isset($_POST['email']))
$email=test_input($_POST['email']);
else
$email=" ";
try
{		
if(filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE)
{	
throw new invalid();
}
echo"<b>details :<b/><br/>";
echo"name of person:$name<br/>";
echo"email of person:$email";			
}
catch(Exception $e)
{
echo"invaid email enter";
}		
?>
