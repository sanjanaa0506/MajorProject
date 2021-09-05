<html>	
<head>	
</head>	
<body bgcolor="pink">  
<img src="hh.jpg">	
<?php

$name=$MiddleName=$LastName = $email =$Age =$website =$Enrollment =$Mobile = $gender =" ";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  $name = test_input($_POST["name"]);$name = test_input($_POST["MiddleName"]);$name = test_input($_POST["LastName"]);
  $email = test_input($_POST["email"]);
  $Age = test_input($_POST["Age"]);
  $website = test_input($_POST["website"]);
  $Enrollment = test_input($_POST["Enrollment"]);
  $Mobile = test_input($_POST["Mobile"]);

  
  $gender = test_input($_POST["gender"]);
}

function test_input($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}																																																																																																		
?>

<center><h1> ASSIGNMNET 1</h1></center>
<center><h2>STUDENT REGISTRATION FORM </h2></center>
<center><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>">  
Name:      <input type="text" name="name"> <br> <br>
MiddleName: <input type="text" name="MiddleName"><br><br> 
LastName: <input type="text" name="LastName"> <br><br>
E-mail:    <input type="text" name="email"> <br><br>
Age:       <input type="text" name="Age">	  <br><br>
Website:   <input type="text" name="website">	  <br><br>
Enrollment:<input type="text" name="Enrollment">	  <br><br>
Mobile:    <input type="text" name="Mobile">	  <br><br>
</textarea>	  
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other	  <br><br>
  <input type="submit" name="submit" value="Submit">  	</center></form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo $MiddleName;
echo $LastName;
echo "<br>";
echo $email;
echo "<br>";
echo $Age;
echo "<br>";
echo $website;
echo "<br>";
echo $Enrollment;
echo "<br>";
echo $Mobile;
echo "<br>";
echo $gender;
echo "<br>";
?>
</body>		
</html>
