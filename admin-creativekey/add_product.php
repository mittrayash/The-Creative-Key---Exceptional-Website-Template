<?php
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 

$count = "SELECT * FROM associates order by id desc";
$check = mysqli_query($conn, $count) or die(mysqli_error($conn));
?>
    
   <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
         <h3>
            Associate List
                     </h3>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12 ">
              
              
                     <div class="container table-responsive col-md-12">
   <table class="table table-bordered text-center " style="background:#fff;">
  
      <thead>
         <tr style="background:#133d69; color:#FFF;">
		 <th class="text-center ">Sr.No.</th>
         <th class="text-center ">Associate Name</th>
         <th class="text-center">Email Id.</th>
         <th class="text-center">Mobile No</th>
            <th class="text-center ">Address</th>
			<th class="text-center ">Action</th>
            
         </tr>
      </thead>
      
      <tbody>
							
      </tbody>
      <?php
	  $i=1;
      while($row=mysqli_fetch_array($check))
	  {
      ?>
      <tr>
	  <td><?php echo $i; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['mobile']; ?></td>
	  <td><?php echo $row['address']; ?></td>
    <td><a href="edit_detail.php?edit_id=<?php echo$row['id']?>"><button class="btn btn-primary">Edit Details</button></a></td>
    <?php $i++;} ?>
    </tr>
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

