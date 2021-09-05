<html>	
<head>
</head>
<body bgcolor="orange"> 
	
<?php

$TypeCompanyCosultancy = $CompanyCosultancyName = $EmailID = $SelectyourQues = $YourAnswer = $YourPassword = $MobileNo = $companyAddress = $CompanyLogo = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  $TypeCompanyCosultancy = test_input($_POST["TypeCompanyCosultancy"]);
  $CompanyCosultancyName = test_input($_POST["CompanyCosultancyName"]);
  $EmailID  = test_input($_POST["EmailID "]);
  $SelectyourQues = test_input($_POST["SelectyourQues"]);
  $YourAnswer = test_input($_POST["YourAnswer"]);
  $YourPassword = test_input($_POST["YourPassword"]);
  $MobileNo  = test_input($_POST["MobileNo"]);
  $companyAddress = test_input($_POST["companyAddress"]);
  $CompanyLogo = test_input($_POST["CompanyLogo"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}	?>

<h2>COMPANY DETAILS</h2>

<form"method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  TypeCompanyCosultancy: <input type="text" name="TypeCompanyCosultancy">	  <br><br>
  CompanyCosultancyName: <input type="text" name="CompanyCosultancyName">	  <br><br>
  EmailID: <input type="text" name="EmailID">	  <br><br>
  SelectyourQues: <input type="text" name="SelectyourQues"><br><br>
  YourAnswer : <input type="text" name="YourAnswer ">	  <br><br>
  MobileNo : <input type="text" name="MobileNo ">	  <br><br>
  companyAddress: <textarea name="comment" rows="5" cols="40"></textarea>	  <br><br>
  CompanyLogo:<input type="text" name="CompanyLogo">	  <br><br>
  <input type="submit" name="submit" value="Submit">  	</form>

<?php
echo "<h2>Your Input:</h2>";
echo $TypeCompanyCosultancy;
echo "<br>";
echo $CompanyCosultancyName;
echo "<br>";
echo $EmailID;
echo "<br>";
echo $SelectyourQues;	
echo "<br>";	
echo $YourAnswer;
echo "<br>";
echo $MobileNo;
echo "<br>";
echo $companyAddress;
echo "<br>";
echo $companyLogo;
echo "<br>";
	
?>
</body>		
</html>

