<?php 

//include 'database.php';
$dbs=mysqli_connect('localhost','root','','urjentupccodes');
try {

        $stmt = $dbs->query('SELECT * FROM team_members ORDER BY member_id ASC');
        while($rows = $stmt->fetch_assoc()) {
     	$mem[]=$rows;
      }	
    //  var_dump($mem);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>