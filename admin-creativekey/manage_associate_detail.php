<?php
error_reporting(0);
require("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
$associatedata=$_GET['associateid'];
$assocdetail  =  explode('|',$associatedata);
$associate_id = $assocdetail[0];
$assoc_rfq  = $assocdetail[1];
$associate_idd = $_SESSION['associate_id'];
?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Associates Details
          </h1>
          
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
			  <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                            
			                <th>Product Name</th>							
			                <th>Quantity</th>
                            <th>Price</th>
                            <th>Product Image</th>
							<th>Attachment File</th>
                            <th>Quote Date</th>					
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
							 
								$result= mysqli_query($conn,"SELECT * from associate_comment where is_active='1' and associate_id ='$associate_id'" ) or die (mysqli_error($conn));
								while ($row3= mysqli_fetch_array ($result) ){
									
								$quoteid=$row3['quote_id'];
								$comment=$row3['comment'];
								$result2 = mysqli_query($conn,"SELECT * from seller_quotes where is_active='1' and Id ='$quoteid' and rfq_id='$assoc_rfq'" ) or die (mysqli_error($conn));
								$quotedata = mysqli_fetch_array($result2);
								$product  =  $quotedata['product_name'];
								$quantity  =  $quotedata['quantity'];
								$price  =  $quotedata['price'];
								
								
								?>
                        <tr>
						    				    
                            <td><?php echo $quotedata['product_name']; ?></td>
                            <td><?php echo $quotedata ['quantity']; ?></td>
                            <td><?php echo $quotedata ['price']; ?></td>	
                            <td><img src="../<?php echo $quotedata ['product_image']; ?>" style="height:50px;width:50px;"></td>
                            <td><img src="../<?php echo $quotedata ['file_attachment']; ?>" style="height:50px;width:50px;"></td>
							<td><?php echo $row3['created_date']; ?></td>

                            <td><?php if(!empty($comment)){?><a href="sent_comment.php?del_id=<?php echo $quoteid."|".$rfq_id; ?>"><span class="label label-primary" style="cursor:pointer;">View Comment</span></a><?php } else {?>   <a href="sent_comment.php?del_id=<?php echo $quoteid."|".$rfq_id; ?>"><span class="label label-success" style="cursor:pointer;">No Comment</span></a><?php } ?></td>
                        </tr>
			<?php  } ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php
include("includes/footer.php"); 
	?>
  </body>
</html>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Preview</h3>
      </div>
      <div class="modal-body">
        <table class="table table-striped">		
		<tr><td>Mixes Name:</td><td><div id="mname"></div></td></tr>
		<tr><td>No. Of Likes:</td><td><div id="nooflikes"></div></td></tr>				
		<tr><td>Modify Date:</td><td><div id="mdat"></div></td></tr>
		<tr><td>Is Active:</td><td><div id="iact"></div></td></tr>
		
    </table>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
	  <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>