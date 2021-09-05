
<!DOCTYPE html>
<html>
<body>
<style>
form.example input{
  float: left;
  width: 25%;
 background:#8C8C92;

  
  border-radius: 14px;
  padding: 10px;
 
  color: white;
  font-size: 17px;
  border:none;
  cursor: pointer;
}

form.example input:hover {
  background: #64646B;
}
</style>
</body>

<form action="upload.php" method="post" nctype="multipart/form-data" class="example">
<h2>Select file to upload : </h2>
<input type="file" name="filToUploaad" id="fileToUpload"><br><br><br><br><br><br>
<input type="submit" value="Upload file" name="submit">
</form>
</body>
</html>