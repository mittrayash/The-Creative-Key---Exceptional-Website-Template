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
$db=mysqli_connect('localhost','kunwaraabid567','Happyworld@159','urjentupccodes');
$id=$_GET['id'];

$query="SELECT * FROM blog_post WHERE postID='$id'";
$check=mysqli_query($db,$query) or die(mysqli_error($db));

$row=mysqli_fetch_assoc($check);
$title=$row['postitle'];
$desc=$row['postdesc'];
$content=$row['postcontent'];
$image=$row['postimage'];

?>
		        <th class="col-sm-2">Title</th>
		        <th class="col-sm-2">Description</th>
		        <th class="col-sm-3">Content</th>
		        <th class="col-sm-3">Image</th>
		        <th class="col-sm-2"></th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		      <form method="post" action="updateblog.php?id=<?php echo $id; ?>" enctype="multipart/form-data" >
		        <td><textarea name="name" rows="4" class="form-control"><?php echo $title; ?></textarea></td>
		        
		        <td><textarea  class="form-control" name="link1" rows="4"><?php echo $desc; ?></textarea></td>
		        <td><textarea  class="form-control" name="link2" rows="4"><?php echo $content; ?></textarea></td>
                        <td><input type="file" class="form-control" name="image1" accept="image/*"></td>    
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

