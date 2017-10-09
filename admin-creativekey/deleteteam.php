<?php

define (DB_USER, "kunwaraabid567");
	define (DB_PASSWORD, "Happyworld@159");
	define (DB_DATABASE, "urjentupccodes");
	define (DB_HOST, "localhost");
	$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

 $id  = $_GET["id"];

 $sql = "DELETE FROM team_members WHERE member_id = '".$id."'";

 $result = $mysqli->query($sql);

 echo json_encode([$id]);
 
 header('Location: addmembers.php');

?>