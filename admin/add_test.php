<?php 

$db=mysqli_connect('localhost','kunwaraabid567','Turningpoint#915','urjentupccodes');

if($db){
//echo "connected";
}else{
echo "not connected";
}


if(isset($_POST['submit'])){
  	
  	$name=$_POST['name'];
  	$company=$_POST['company'];
	$postCont=$_POST['postCont'];
	
	
	$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image1"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
	   $sql="INSERT INTO testimol_post(name,company,postcontent,image_path) VALUES('$name','$company','$postCont','$target_file')";	
            $q=mysqli_query($db,$sql) or die(mysqli_error($db));
    	
    	if($q){
header('Location: testimonials.php');
}
     else {
        echo "Sorry, there was an error uploading your file.";
		
    }
       

}

?>
  
