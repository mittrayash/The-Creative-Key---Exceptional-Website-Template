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
              
              
                     <div class="container table-responsive col-md-12">
   
		     	<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th class="col-sm-2">Name</th>
		        <th class="col-sm-3">Company</th>
		        <th class="col-sm-4">Content</th>
		        <th class="col-sm-2">Upload Image</th>
		        <th class="col-sm-1"></th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		         <?php
$db=mysqli_connect('localhost','kunwaraabid567','Happyworld@159','urjentupccodes');
$id=$_GET['id'];

$query="SELECT * FROM testimol_post WHERE id='$id'";
$check=mysqli_query($db,$query) or die(mysqli_error($db));

$row=mysqli_fetch_assoc($check);
$title=$row['name'];
$desc=$row['company'];
$content=$row['postcontent'];


?>
		      <form method="post" action="updatetest1.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
		        <td><input class="form-control" type="text" value="<?php echo $title; ?>" name="name"></td>
		        <td><input class="form-control" type="text" value="<?php echo $desc; ?>" name="company"></td>
		        <td> <textarea class="form-control" rows="5" id="comment" name="postCont"><?php echo $content;?></textarea></td>
		        <td><input type="file" class="form-control" name="image1" accept="image/*"></td>
		        <td>
		        	<input class="btn btn-success" name="submit" type="submit">
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

