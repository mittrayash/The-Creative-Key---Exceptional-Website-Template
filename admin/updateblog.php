<?php

  //$db=mysqli_connect('localhost','kunwaraabid567','Mybusinessgoal@951','urjentupccodes');
	define (DB_USER, "kunwaraabid567");
	define (DB_PASSWORD, "Turningpoint#915");
	define (DB_DATABASE, "urjentupccodes");
	define (DB_HOST, "localhost");
	$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

  $id  = $_POST["id"];
  $post = $_POST;

  $sql = "UPDATE blog_post SET postitle= '".$post['title']."'
    ,postdesc= '".$post['description']."' ,
    postcontent= '".$post['content']."'
    WHERE postID = '".$id."'";
   
  $result = $mysqli->query($sql);

  $sql2 = "SELECT * FROM blog_post WHERE postID = '".$id."'"; 
//die(var_dump($sql2));

  $result = $mysqli->query($sql2);

  $data = $result->fetch_assoc();

  echo json_encode($data);

?>