<?php 

//include 'database.php';
$dbs=mysqli_connect('localhost','root','','urjentupccodes');
try {

        $stmt = $dbs->query('SELECT * FROM blog_post ORDER BY postID DESC');
       while($test= $stmt ->fetch_assoc()) {
     	$row[]=$test;
      }	
     	
    } catch(PDOException $e) {
        echo $e->getMessage();
    }



?>