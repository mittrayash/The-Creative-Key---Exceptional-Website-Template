<?php 


//database credentials
$host='localhost';
$user='kunwaraabid567';
$pass='Turningpoint#915';
$db='urjentupccodes';


$conn=mysqli_connect($host,$user,$pass);
if($conn){

$select=mysqli_select_db($conn,$db);
if(!$select)
{
echo "Database not Selected!";
}
}

$id=$_GET['id'];
if(isset($_POST['submit'])){
  	
  	$postTitle=$_POST['name'];
  	$postDesc=$_POST['link1'];
	$postCont=$_POST['link2'];


        $query =mysqli_query($conn,"Select * from team_members where member_id = '$id'")or die(mysqli_error());
        $row = mysqli_fetch_array($query);
        $fileupload2  = $row['image'];

        if(!empty($_FILES["image1"]["name"]))
	    {
	    $fileupload2 = $_FILES["image1"]["name"];
	    $imageFileType1 = pathinfo($target_file,$target_file1,PATHINFO_EXTENSION);
	    $target_dir1 = "";
	    $target_file = $target_dir1 . basename($_FILES["image1"]["name"]);
	    $fileupload2=str_replace(" ", '_', $target_file);
	    $a_file = str_replace(" ", '_', $_FILES["image1"]["name"]);	    
	    $temp1 = explode(".", $_FILES["image1"]["name"]);
	    $newfilename1 = round(microtime(true)) . '.' . end($temp);
            move_uploaded_file($_FILES['image1']['tmp_name'], "images/".$a_file);
	    }
      
	
	$stmt ="UPDATE team_members SET member_name='$postTitle',fb_link='$postDesc',ld_link='$postCont',image ='$fileupload2' WHERE 
        member_id='$id'";      
    	$check=mysqli_query($conn,$stmt) or die(mysqli_error($conn));
    	
    	header('Location: addmembers.php');
	
       

}

?>