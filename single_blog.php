<?php
$db=mysqli_connect('localhost','thecr_witty321','witty@321@123','thecreativekey_urjentupccodes');
$id= $_GET['postID'];
$sql="SELECT postitle,postdesc,postcontent,postdate FROM blog_post WHERE postID='$id'";
$q=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($q)){
echo $row['postitle'];
}


 ?>