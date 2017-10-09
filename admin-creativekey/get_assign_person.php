<?php
require("connect.php");
if(!empty($_POST["assignperson"])) {
	
	$query=mysqli_query($conn,"SELECT * from associates where is_active='1'")or die(mysqli_error());
	?>
	
	<option value="">Select Assign Person</option>
	<?php
	  while ($row= mysqli_fetch_array ($query) )
	  {
		?>
   
		<option value="<?php echo $row ['id']; ?>"><?php echo $row ['username']; ?></option>
	   <?php 
   }
   ?>
   
<?php }   
?>
