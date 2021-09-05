<?php
if(isset($_POST["submit"]))
{
mysqli_query($link,"insert into prajyoti1 values('$_POST[username]','$_POST[password]')");
}
?>
