<?php 

//include 'database.php';
$dbs=mysqli_connect('localhost','root','','urjentupccodes');
try {

        $stmt = $dbs->query('SELECT * FROM testimol_post ORDER BY id DESC ');
        while($rows = $stmt ->fetch_assoc()) {
     	$tests[]=$rows;
      }	
      
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>