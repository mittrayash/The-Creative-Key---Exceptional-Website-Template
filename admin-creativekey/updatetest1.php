<?php 


//database credentials
$host='localhost';
$user='kunwaraabid567';
$pass='Happyworld@159';
$db='urjentupccodes';


$conn=mysqli_connect($host,$user,$pass);
if($conn){

$select=mysqli_select_db($conn,$db);
if(!$select){
echo "data base not selected";

}
}

$id=$_GET['id'];
if(isset($_POST['submit'])){
  	
  	$postTitle=$_POST['name'];
  	$postDesc=$_POST['company'];
	$postCont=$_POST['postCont'];
         	
        $query=mysqli_query($conn, "select * from testimol_post where id='$id'")or die(mysqli_error());
	$row=mysqli_fetch_array($query);
	$fileupload2 = $row['image_path'];
         	
          if(!empty($_FILES["image1"]["name"]))
	    {
	    $fileupload2 = $_FILES["image1"]["name"];
	    $imageFileType1 = pathinfo($target_file,$target_file1,PATHINFO_EXTENSION);
	    $target_dir1 = "images/";
	    $target_file = $target_dir1 . basename($_FILES["image1"]["name"]);
	    $fileupload2=str_replace(" ", '_', $target_file);
	    $a_file = str_replace(" ", '_', $_FILES["image1"]["name"]);	    
	    $temp1 = explode(".", $_FILES["image1"]["name"]);
	    $newfilename1 = round(microtime(true)) . '.' . end($temp);
            move_uploaded_file($_FILES['image1']['tmp_name'], "images/".$a_file);
	    }
	
        $stmt ="UPDATE testimol_post SET name='$postTitle',company='$postDesc',postcontent='$postCont',image_path='$fileupload2 ' WHERE id='$id'";
    	$check=mysqli_query($conn,$stmt) or die(mysqli_error($conn));
    	
    	header('Location: testimonial.php');

       

}

?>