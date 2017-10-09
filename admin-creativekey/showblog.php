<?php 

//include 'database.php';
$dbs=mysqli_connect('localhost','kunwaraabid567','Happyworld@159','urjentupccodes');
try {

        $stmt = $dbs->query('SELECT * FROM blog_post ORDER BY postID DESC');
       while($test= $stmt ->fetch_assoc()) {
     	$row[]=$test;
      }	
     	
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>