<?php
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
//$count = "SELECT * FROM property where is_active=1";
//$property_count = mysqli_query($conn, $count);
//$property_count =  mysqli_num_rows($property_count);



?>
    
   <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12 ">
              
              
                    <div class="container" style="padding-top:50px;">
		<table class="table table-bordered">
		    <thead>
		      <tr>
		       <?php
$db=mysqli_connect('localhost','kunwaraabid567','Turningpoint#915','urjentupccodes');
$id=$_GET['id'];

$query="SELECT * FROM team_members WHERE member_id='$id'";
$check=mysqli_query($db,$query) or die(mysqli_error($db));

$row=mysqli_fetch_assoc($check);
$title=$row['member_name'];
$desc=$row['fb_link'];
$content=$row['ld_link'];


?>
		        <th class="col-sm-2">Member Name</th>
		        <th class="col-sm-2">Image</th>
		        <th class="col-sm-3">Facebook Profile Link</th>
		        <th class="col-sm-3">Linkedin Profile Link</th>
		        <th class="col-sm-2"></th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		      <form method="post" action="updatemem1.php?id=<?php echo $id; ?>" enctype="multipart/form-data" >
		        <td><input class="form-control" type="text" name="name" value="<?php echo $title; ?>"></td>
		         <td><input type="file" class="form-control" name="image1" accept="image/*"></td>
		        <td><input class="form-control" type="text" value="<?php echo $desc; ?>" name="link1"></td>
		        <td><input class="form-control" type="text" value="<?php echo $content; ?>" name="link2"></td>
		        <td>
		        	<input type="submit" name="submit" class="btn btn-success" value="submit">
		        </td>
		        </form>
		      </tr>
		      
		    </tbody>
		 </table>
		 
		
	</div>
	
	
    
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
             
             
              <!-- /.box -->


            </section><!-- /.Left col -->
          
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
     
      </div><!-- /.content-wrapper -->
	  
 <?php include("includes/footer.php"); ?>  

