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

if(isset($_POST['city']))
$name=test_input($_POST['city']);
else
$city=" ";
if(empty($_POST['city']))
echo"city is required<br/>";

?>
