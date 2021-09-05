<?php 
session_start(); 
$host="localhost";
$user="root";
$password="my";
$db="prajyoti";

 
    mysql_connect("localhost", "root", "my"); 
    mysql_select_db($db);

 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    
    $sql="select * from prajyoti1 where username='".$username."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    $row=mysql_fetch_array($result);
    
    if(mysql_num_rows($result)==1 && $row['status']=="a")
   {
    $_SESSION['username'] = $row['username'];
    header("Location:template.php");
    exit();
    }
    else if(mysql_num_rows($result)==1 && $row['status']=="t")
{
    $_SESSION['username'] = $row['username'];
    header("Location:template.php");
    exit();
 
}
else if(mysql_num_rows($result)==1 && $row['status']=="s")
{
    $_SESSION['username'] = $row['username'];
    header("Location:template.php");
    exit();
}
    else{
         
        $_SESSION['errMsg'] = "Invalid username or password";
        header("location: login.php"); 
        
        exit();
    }
        
}
?>
