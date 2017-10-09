<?php
error_reporting(0);
include ('connect.php');
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['number'];
$company=$_POST['company'];
$city=$_POST['location'];
$password=$_POST['password'];
$radio=$_POST['optradio'];
$comment=$_POST['comment'];



$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["pic"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["pic"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$query="INSERT INTO users (email,name,location,phone,password,company_name,type,photo,description) VALUES('$email','$name','$city','$phone','$password','$company','$radio','$target_file','$comment')";

$check=mysqli_query($conn,$query) or die(mysqli_error($conn));

if($check)
{
header('Location: dashboard.php');
}
}

 ?>
