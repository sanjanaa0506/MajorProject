<?php
class invalid extends Exception
{

}

function test_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
if(isset($_POST['username']))
$username=test_input($_POST['username']);
else
$username=" ";
try
{		
if(filter_var($username,FILTER_VALIDATE_EMAIL)==FALSE)
{	
throw new invalid();
}

echo"email of person:$email";			
}
catch(Exception $e)
{
echo"invaid email enter";
}		
?>
