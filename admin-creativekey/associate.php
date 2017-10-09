<?php
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
?>
    
   <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
         <h1>
            Associate
                     </h1>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12 ">
              
              
                     <div class="container table-responsive col-md-12">
   <table class="table table-bordered text-center " style="background:#fff;">
      <thead>
                      <tr>
                            <th>S.No.</th>
			                <th>Associate</th>
                            <th>RFQ's Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
      
      <tbody>
                      <?php
								$i=1;
								$result= mysqli_query($conn,"Select * from assign_rfq_detail where is_active='1' order by  id desc") or die (mysqli_error($conn));
								while ($row3= mysqli_fetch_array ($result) )
								{
								$associateid = $row3['associate_id'];
								$rfq_id = $row3['rfq_id'];
								?>
                        <tr>
						 <td><?php echo $i; ?></td>
                            <td><?php echo $row3 ['associate_name']; ?></td>
						    <td><?php echo $row3 ['rfq_name']; ?></td>
							
                            <td class="text-center" style="width:100px"><a href="manage_associate_detail.php?associateid=<?php echo $associateid."|".$rfq_id;?>" class="btn btn-success">View Detail</button></td>
                        </tr>
						<?php $i++; } ?>
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

