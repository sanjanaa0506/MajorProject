<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
  if (empty($_POST["username"])) 
  {
    $nameErr = "enter username";
  } 
else
  {
    $name = test_input($_POST["username"]);
  }

  if (empty($_POST["password"])) 
  {
    $passwordErr = "Enter Password";
  } 
else
  {
    $password = test_input($_POST["password"]);
  }

?>
