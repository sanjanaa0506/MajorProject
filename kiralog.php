<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>

	
</head>
<link rel="stylesheet" type="text/css" href="style.css">

<body background="loginimg.jpg">
<div class="form-wrapper">
  
  <form action="kiralogval.php" method="POST" bgcolor="black">
    <h3>Login here</h3>
	
    <div class="form-item">
		<input type="text" name="Username" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="Password" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
               
    </div>
      
  </form>
<font color="red">
<?php  if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } unset($_SESSION['errMsg']); ?>
</font>  
</div>
</body>
</html>
