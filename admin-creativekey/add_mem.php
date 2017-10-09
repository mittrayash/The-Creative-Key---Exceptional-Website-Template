<?php 
include("connect.php");
if(isset($_POST['submit']))
{

$allowedExts = array("gif", "jpeg", "jpg", "png" , "JPG" , "PNG" , "JPEG");
$temp = explode(".", $_FILES["image1"]["name"]);
$extension = end($temp);
if ((($_FILES["image1"]["type"] == "image/gif")
|| ($_FILES["image1"]["type"] == "image/jpeg")
|| ($_FILES["image1"]["type"] == "image/jpg")
|| ($_FILES["image1"]["type"] == "image/pjpeg")
|| ($_FILES["image1"]["type"] == "image/x-png")
|| ($_FILES["image1"]["type"] == "image/png") || ($_FILES["image1"]["type"] == "image/JPG") || ($_FILES["image1"]["type"] == "image/JPEG") || ($_FILES["image1"]["type"] == "image/PNG"))
&& ($_FILES["image1"]["size"] < 2000000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["image1"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["image1"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["image1"]["name"] . "<br>";
    echo "Type: " . $_FILES["image1"]["type"] . "<br>";
    echo "Size: " . ($_FILES["image1"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["image1"]["tmp_name"] . "<br>";
   if (file_exists("images/" . $_FILES["image1"]["name"]))
      {
      echo $_FILES["image1"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["image1"]["tmp_name"],__DIR__."/images/" . $_FILES["image1"]["name"]);	
      echo "Stored in: " . __DIR__."/images/" . $_FILES["image1"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
	echo $_FILES["image1"]["error"];
  }
	
	$postTitle=$_POST['name'];
  	$postDesc=$_POST['link1'];
	$postCont=$_POST['link2'];	
	$image_p=basename( $_FILES["image1"]["name"]);
	 $sql="INSERT INTO team_members(member_id,member_name,fb_link,ld_link,image) VALUES('','$postTitle','$postDesc','$postCont','$image_p')";	
            $q=mysqli_query($conn,$sql);
if($q){
header('Location: addmembers.php');
}
     else {
        echo "Sorry, there was an error uploading your file.";
		
    }
	
	
}
?>
  
