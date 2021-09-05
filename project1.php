<html>	
<head>
<font color="white">
<center> 
<h1><b>YOUR CAREER STARTS HERE</h1><font> 
</center> 
</head>	
<body bgcolor = "darkblue">
<font color="white">  	
<?php

$UserID = $Password = $Verify = $HintQuestion = $Answer = $FirstName = $LastName = $DOB = $Address = $Country = $State = $City = $PostalCode = $Email = $Phone1 = $Phone2 = $FaxNo =" ";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  $UserID = test_input($_POST["UserID"]);
  $Password = test_input($_POST["Password"]);
  $Verify = test_input($_POST["Verify"]);
  $HintQuestion = test_input($_POST["HintQuestion"]);
  $Answer = test_input($_POST["Answer"]);
  $FirstName = test_input($_POST["FirstName"]);
  $LastName = test_input($_POST["LastName"]);
  $DOB = test_input($_POST["DOB"]);
  $Address = test_input($_POST["Address"]);
  $Country = test_input($_POST["Country"]);
  $State = test_input($_POST["State"]);
  $City = test_input($_POST["City"]);
  $PostalCode = test_input($_POST["PostalCode"]);
  $Email = test_input($_POST["Email"]);
  $Phone1 = test_input($_POST["Phone1"]);
  $Phone2 = test_input($_POST["Phone2"]);
  $FaxNo = test_input($_POST["FaxNo"]);
} 
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h4>Fields Are Mandatory</h4>
<h3>Login Information</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  UserID: <input type="text" name="UserID"><br><br>
  Password: <input type="Password" required pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{6,}" name="Password1" onchage="this.setCustomValidity(this.Validity.patterMismatch ? this.title: '');
  if(this.checkValidity()) form.Password.pattern = RegExp.escape(this.value);
  "><br><br>
  Verify:<input type="password";><br><br>
<label for="HintQuestion">HintQuestion:</label>
<select id="cmbmake" name="HintQuestion" size="1">
<option value="what is your pet name?">what is your pet name</option>
<option value="what is your fav past time?">what is your fav past time</option>
<option value="what is birth your place?">what is birth your place</option>
</select><br><br>
  Answer: <input type="text" name="Answer"><br><br>
  <h3>Personal Information</h3>
  FirstName: <input type="text" name="FirstName"><br><br>
  LastName: <input type="text" name="LastName"><br><br>
  DOB: <input type="date" name="DOB"><br><br>
  Address: <textarea name="Address" rows="5" cols="40"></textarea>  <br><br>
 
  <label for="Country">Country:</label>
<select id="cmbmake" name="Country" size="1">
<option selected="selected" value="India">India</option>
</select><br><br>

<label for="State">State:</label>
<select id="cmbmake" name="State" size="1">
<option value="Adhra Pradesh">Adhra Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Goa">Goa</option>
<option value="Gujrat">Gujrat</option>
<option value="Haryana">Haryana</option>
<option value="Maharashtra">Maharashtra</option>
</select><br><br>


<label for=" City"> City:</label>
<select id="cmbmake" name=" City" size="1">
<option value="Visakhapatnam">Visakhapatnam</option>
<option value="Tenali">Tenali</option>
<option value="Guwahati">Guwahati</option>
<option value="Jorhat">Jorhat</option>
<option value="Patna">patna</option>
<option value="Gaya">Gaya</option>
<option value="Mumbai">Mumbai</option>
<option value="Pune">Pune</option>
<option value="nagpur">nagpur</option>
<option value="nashik">nashik</option>
<option value="Latur">Latur</option>
<option value="Akola">Akola</option>
</select><br><br>
  

  PostalCode: <input type="text" name="PostalCode"><br><br>
  Email: <input type="text" name="Email"><br><br>
  Phone1: <input type="number" name="Phone1"><br><br>
  Phone2: <input type="number" name="Phone2"><br><br>
  FaxNo: <input type="number" name="FaxNo"><br><br>
  <input type="button" value="NEXT" onclick="Project2.php" />
</form>

<?php
echo $UserID;
echo "<br>";
echo $Password;
echo "<br>";
echo $Verify;
echo "<br>";
echo $HintQuestion;	
echo "<br>";	
echo $Answer;
echo "<br>";
echo $FirstName;
echo "<br>";
echo $LastName;
echo "<br>";
echo $DOB;
echo "<br>";
echo $Address;
echo "<br>";
echo $Country;
echo "<br>";
echo $State;
echo "<br>";
echo $City;
echo "<br>";
echo $PostalCode;
echo "<br>";
echo $Email;
echo "<br>";
echo $Phone1;
echo "<br>";
echo $Phone2;
echo "<br>";
echo $FaxNo;
echo "<br>";	
?>
</font>
</body>		
</html>
