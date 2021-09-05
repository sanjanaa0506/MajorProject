<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES[""]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (file_exists($target_file)) {
    echo "<h3>Sorry, file already exists.</h3>";
    $uploadOk = 0;
}

// Allow certain file formats
else if($imageFileType != ".png" && $imageFileType != ".P" ) {
    echo "Sorry, only png files are allowed.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1e+7) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<h3>Sorry, your file was not uploaded.</h3>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>