<?php 


//database credentials
$host='localhost';
$user='kunwaraabid567';
$pass='Happyworld@159';
$db='urjentupccodes';


$conn=mysqli_connect($host,$user,$pass) or die();
$select=mysqli_select_db($conn,$db);
if($select){
echo "done";

}


if(isset($_POST['submit'])){
  	
  	$postTitle=$_POST['postTitle'];
  	$postDesc=$_POST['postDesc'];
	$postCont=$_POST['postCont'];	
	$date=date('Y-m-d');
	
	
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
	   $stmt ="INSERT INTO blog_post(postitle,postdesc,postcontent,postdate,postimage) VALUES('$postTitle','$postDesc','$postCont','$date','$target_file')";
    	$check=mysqli_query($conn,$stmt) or die(mysqli_error($conn));
    	
    	header('Location: addblog.php');
	
       

}

?>