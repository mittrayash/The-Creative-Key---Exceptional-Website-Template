<?php 

//include 'database.php';
$dbs=mysqli_connect('localhost','kunwaraabid567','Happyworld@159','urjentupccodes');
try {

        $stmt = $dbs->query('SELECT * FROM testimol_post ORDER BY id DESC ');
        while($rows = $stmt ->fetch_assoc()) {
     	$tests[]=$rows;
      }	
      
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>