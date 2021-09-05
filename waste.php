<li><a href="#">Location<span><img src="a1.png" width="5%" height="5%"></span></a>
             <ul>
           <li><a href="#">Mumbai</a></li>
           <li><a href="#">Pune</a></li>
            <li><a href="#">Nagpur</a></li>
            <li><a href="#">Satara</a></li>
            <li><a href="#">Nashik</a></li>
             <li><a href="#">Amravati</a></li>
              </ul>
             </li>




 <li><a href="">Myaccout</a><ul>
           <li><a href="#">Dashboard</a></li>
           <li><a href="#">My profile</a></li>
            <li><a href="#">My resume</a></li>
            <li><a href="#">My application</a></li>
            <li><a href="#">Recomedations</a></li>
             <li><a href="#">Favorite jobs</a></li>
              </ul>
             </li>





<center>
<font color="white">
<h1>Welcome to e<font color="orange">JOB</font>Finder</h1>
<h3>"eJOBFinder,leading online career and recruitment resourse with it's cutting age technology 
which provides relevant profiles to employeers and relevant jobs to job <br> seekers across idustry
 verticals,experiance levels and geographics.More the 2000 million people have register on the
 eJOBFinder worldwide network.Today,<br>with operationsin more than 40 cities,eJOBFinder provides 
the widest and most sophisticated jobseeking,career management.Recruitment and talent management<br> 
capabilities globally.eJOBFinder mpower search was the voted product of the year under the 
'online job portal category'.In a survey of over 18000 people eJOBFinder and  DishTV partner
convergence of the internet and TV media to make jo services accessile to TV viewer's across all cities,
bridging the ultimate needs of the audiance <br> for whom access to the internet is limited.
This first ever job search initiative is called 'eJOBFinderjobs Active'."</h3>
</center>   
  </font>











<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <h3>Searchjob:</h3><br> <input type="text" name="Searchjob" placeholder="$Searchjob"><br><br>

<h3>Salaryoffer:</h3><br><input type="text" name="Salaryoffer " placeholder="Salaryoffer "><br><br>
<h3>ExperianceLevel:</h3><br><input type="text" name="ExperianceLevel" placeholder="ExperianceLevel"><br><br>

<label for="Category"><h3>Category:</h3><br></label>
<select id="cmbmake" name="Category" size="1">
<option value="Designer">Designer</option>
<option value="Developer">Developer</option>
<option value="IT">IT</option>
<option value="sale">sale</option>
<option value="service manager">service manager</option>
<option value="Finance">Finance</option>
</select><br><br>
  


<label for="$Type"><h3>Type:</h3><br></label>
<select id="cmbmake" name="$Type" size="1">
<option value="AllType">AllType</option>
<option value="Freelance">Freelance</option>
<option value="PartTime">PartTime</option>
<option value="FullTime">FullTime</option>
</select><br><br>



<label for="$Location"><h3>Location:</h3><br></label>
<select id="cmbmake" name="$Location" size="1">
<option value="Mumbai">Mumbai</option>
<option value="Pune">Pune</option>
<option value="Amravati">Amravati</option>
<option value="Nagpur">Nagpur</option>
</select><br><br>
  <input type="button" value="Search">
 <input type="button" value="Reset">
</form>
























<?php
echo $Salaryoffer;
echo "<br>";
echo $Category;
echo "<br>";
echo $Type;
echo "<br>";
echo $ExperianceLevel;
echo "<br>";
echo $Salaryoffer;
echo "<br>";
?>




















$Searchjob = $Category = $Type = $Location = $Salaryoffer =$ExperianceLevel = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  $Searchjob = test_input($_POST["Searchjob"]);
  $Category = test_input($_POST["Category "]);
  $Type = test_input($_POST["Type"]);
  $Location = test_input($_POST["$Location"]);
  $Salaryoffer = test_input($_POST["Salaryoffer"]);
  $ExperianceLevel = test_input($_POST["ExperianceLevel"]);
} 
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}











$res=mysqli_query($link,"select * from prajyoti2");
echo "All available jobs are";
echo "<table border=1>";
echo "<tr>";
echo "<th>"; echo  "Title"; echo "</th>";
echo "<th>"; echo  "Description"; echo "</th>";
echo "<th>"; echo  "Type"; echo "</th>";
echo "<th>"; echo  "Location"; echo "</th>";
echo "<th>"; echo  "Category"; echo "</th>";
echo "<th>"; echo  "Closing"; echo "</th>";
echo "<th>"; echo  "Name"; echo "</th>";
echo "<th>"; echo  "Descriptions"; echo "</th>";
echo "<th>"; echo  "Logo"; echo "</th>";
echo "</tr>";
























<div class="containerss">
<ul>
<center>
<li><h3>FREE</h3><br><br>
<img src="m5.png" width="20%" height="20%"><br><br>
7 days membership<br><br>1 job posting<br><br>no featured job<br><br>no refresh job<br><br>job displayed for 7 days<br><br>post job with cover image<br><br>post job with address <br><br>post job with category<br><br>post job with type<br><br><form><input type='submit' value="select"></form></li>

<li><h3>STANDARD</h3><br><br>
<img src="m5.png" width="20%" height="20%"><br><br>
7 days membership<br><br>1 job posting<br><br>no featured job<br><br>no refresh job<br><br>job displayed for 7 days<br><br>post job with cover image<br><br>post job with address <br><br>post job with category<br><br>post job with type<br><br><form><input type='submit' value="select"></form></li>

<li><h3>FEATURED</h3><br><br>
<img src="m5.png" width="20%" height="20%"><br><br>
7 days membership<br><br>1 job posting<br><br>no featured job<br><br>no refresh job<br><br>job displayed for 7 days<br><br>post job with cover image<br><br>post job with address <br><br>post job with category<br><br>post job with type<br><br><form><input type='submit' value="select"></form></li>


<li><h3>PREMIUM</h3><br><br>
<img src="m5.png" width="20%" height="20%"><br><br>
7 days membership<br><br>1 job posting<br><br>no featured job<br><br>no refresh job<br><br>job displayed for 7 days<br><br>post job with cover image<br><br>post job with address <br><br>post job with category<br><br>post job with type<br><br><form><input type='submit' value="select"></form></li>

</ul>
</div><br>





















<center><font color="black">
<h2>Featured Job</h2><br><br>

OPENINGS IN GOOGLE FOR CONTENT WRITER<br>INTERNATIONAL PROCESS<br>
Jobs Expert Private Limited<br>
Gurugram, Haryana (+1 other)
<form>
<input type='submit' value="apply">
<input type='submit' value="save">
<input type='submit' value="view more"></form><br><br><br><br>
</center>

</font>
</center>
</div>



if(move_uploaded_files($_FILES['tmp_name']['name'],$target))
{
$msg="image uploaded successfully";
}
else{
$msg="image unsuccessfully";
}









<?php
$msg="";
if(isset($_POST['upload']))
{
$target="tt1/".basename($_FILES['image']);
$db=mysqli_connect("localhost","root","","pd");
$image=$_FILES['image'];
$sql="INSERT INTO tt1(Logo)VALUES('$image')";
mysqli_query($db,$sql);
if(move_uploaded_files($_FILES['tmp_name']['name'],$target))
{
$msg="image uploaded successfully";
}
else{
$msg="image unsuccessfully";
}
}
?>




<input type="hidden" name="size" value=1000000>
<div>
  Logo: <input type="file" name="image">	  <br><br> 
</div>
<div>
  <input type="submit" name="upload" value="upload">	  <br><br> 
</div>
