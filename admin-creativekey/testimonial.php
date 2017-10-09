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
		      <form method="post" action="add_test.php" enctype="multipart/form-data">
		        <td><input class="form-control" type="text" placeholder="title...." name="name"></td>
		        <td><input class="form-control" type="text" placeholder="title...." name="company"></td>
		        <td> <textarea class="form-control" rows="5" id="comment" name="postCont"></textarea></td>
		        <td><input type="file" class="form-control" name="image1" accept="image/*"></td>
		        <td>
		        	<input class="btn btn-success" name="submit" type="submit">
		        </td>
		        </form>
		      </tr>
		      
		    </tbody>
		 </table>
		 
		  <table class="table table-bordered" style="margin-top:50px;">
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
		      <?php
		    $db=mysqli_connect('localhost','kunwaraabid567','Happyworld@159','urjentupccodes');
		    
		    $query="SELECT * FROM testimol_post order by id DESC";
		    $check=mysqli_query($db,$query) or die(mysqli_error($db));
		    while($row=mysqli_fetch_assoc($check)){
		    $vid=$row['id'];
		    $vname=$row['name'];
		    $vimage=$row['image_path'];
		    $vfb=$row['company'];
		    $vld=$row['postcontent'];
		    
		    ?>
		      <tr>
		        <td><?php echo $vname; ?></td>
		        <td><?php echo $vfb; ?></td>
		        <td><?php echo $vld; ?></td>
		        <td><img src="<?php echo $vimage;?>" style="width:80px;height:80px;"></td>
		        <td>
		        	<button class="btn btn-primary" style="width:80px;margin-bottom:10px;"><a href="edittest1.php?id=<?php echo $vid; ?>" style="color:#fff;">EDIT</button>
		        	<button class="btn btn-danger"><a href="deletetest.php?id=<?php echo $vid; ?>" style="color:#fff">DELETE</button>
		        </td>
		      </tr>
		      <?php } ?>
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

