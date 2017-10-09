<?php
$db=mysqli_connect('localhost','kunwaraabid567','Turningpoint#915','urjentupccodes');

$num_rec_per_page = 5;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };

$start_from = ($page-1) * $num_rec_per_page;

$sqlTotal = "SELECT * FROM blog_post";
$sql = "SELECT * FROM blog_post Order By postID desc LIMIT $start_from, $num_rec_per_page"; 
$result = mysqli_query($db,$sql);

  while($row = $result->fetch_assoc()){

     $json[] = $row;

  }
//die(var_dump($json));

$data['data'] = $json;

$result =  mysqli_query($mysqli,$sqlTotal);

$data['total'] = mysqli_num_rows($result);

echo json_encode($data);

?>