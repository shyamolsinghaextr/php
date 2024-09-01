<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap File Upload</title>
</head>
<body>

<form action="file.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php

if(isset($_POST["submit"])) {
	
	$Filename= $_FILES['fileToUpload']['name'];
	$Type = $_FILES['fileToUpload']['type'];
	$Size = $_FILES['fileToUpload']['size'];
	$Tempname = $_FILES['fileToUpload']['tmp_name'];
	$Error  = $_FILES['fileToUpload']['error'];
	
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($Filename);
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	
	$uploadOk = 1;
	
    if(
	$imageFileType != "jpg" && 
	$imageFileType != "png" && 
	$imageFileType != "jpeg" && 
	$imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
	
	
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }



    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $Filename)). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
