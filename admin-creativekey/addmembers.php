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
   <table class="table table-bordered text-center " 
  
      <thead>
         <tr style="background:#133d69; color:#FFF;">
             <th class="col-sm-2">Member Name</th>
		        <th class="col-sm-2">Image</th>
		        <th class="col-sm-3">Facebook Profile Link</th>
		        <th class="col-sm-3">Linkedin Profile Link</th>
		        <th class="col-sm-2">Action</th>
            
         </tr>
      </thead>
 <tbody>
		      <tr>
		      <form method="post" action="add_mem.php" enctype="multipart/form-data" / >
		        <td><input class="form-control" type="text" name="name" placeholder=""></td>
		         <td><input type="file" class="form-control" name="image1" accept="image/*"></td>
		        <td><input class="form-control" type="text" name="link1" placeholder=""></td>
		        <td><input class="form-control" type="text" name="link2" placeholder=""></td>
		        <td>
		        	<input type="submit" name="submit" class="btn btn-success" value="submit">
		        </td>
		        </form>
		      </tr>
		      
		    </tbody>
		 </table>
		 
      
       <table class="table table-bordered" style="margin-top:50px;">
		    <thead>
		    
		       <tr>
		       
		        <th class="col-sm-2">Member Name</th>
		        <th class="col-sm-2">Image</th>
		        <th class="col-sm-3">Facebook Profile Link</th>
		        <th class="col-sm-3">Linkedin Profile Link</th>
		        <th class="col-sm-2"></th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php
		    $db=mysqli_connect('localhost','kunwaraabid567','Happyworld@159','urjentupccodes');
		    
		    $query="SELECT * FROM team_members order by member_id DESC";
		    $check=mysqli_query($db,$query) or die(mysqli_error($db));
		    while($row=mysqli_fetch_assoc($check)){
		    $vid=$row['member_id'];
		    $vname=$row['member_name'];
		    $vimage=$row['image'];
		    $vfb=$row['fb_link'];
		    $vld=$row['ld_link'];
		    
		    ?>
		      <tr>
		        <td><?php echo $vname; ?></td>
		        <td><img src="images/<?php echo $vimage; ?>" width="100" height="100"></td>
		        <td><?php echo $vfb; ?></td>
		        <td><?php echo $vld; ?></td>
		        
		        <td>
		        	<button class="btn btn-primary" style="width:80px;"><a href="editmem1.php?id=<?php echo $vid; ?>" style="color:#fff;">EDIT</button>
		        	<button class="btn btn-danger"><a href="deleteteam.php?id=<?php echo $vid; ?>" style="color:#fff">DELETE</button>
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

