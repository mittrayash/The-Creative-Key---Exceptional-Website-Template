<?php
error_reporting(0);
require("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
$ID=$_GET['assignto'];

	?>
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
           <!-- <li class="active">Edit Clinic</li> -->
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Rfq Assign Form</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<?php
				$query=mysqli_query($conn, "select * from  rfq_post where id='$ID'")or die(mysqli_error());
				$row=mysqli_fetch_array($query);
				
				?>
                <form role="form" method="post" name="form"  enctype="multipart/form-data">
                  <div class="box-body">
				  <div class="row col-md-6">
				  
				  <div class="form-group" style="display:none;">
					<label>Product Id</label>
					<input class="form-control" type="text" value="<?php echo $row['id'];?>" name="rfq_id" readonly style="width:70%">
					</div>
				  
				  <div class="form-group">
					<label>Product Name</label>
					<input class="form-control" type="text" value="<?php echo $row['product_name'];?>" name="rfq_name" readonly style="width:70%">
					</div>
				  
					<div class="form-group">
                      <label for="exampleInputPassword1">Associates:</label>
                   
							<select   name="assign_person" class="form-control"  style="width:70%">
							
								<option value="0" disabled selected style='display:none;'>Select Associates</option>
								 <?php
								  $query=mysqli_query($conn,"select * from associates where is_active='1'")or die(mysqli_error());
								  while ($row= mysqli_fetch_array ($query) )
								  {
									?>
							   
									<option value="<?php echo $row ['id']."|".$row['name']; ?>"><?php echo $row ['name']; ?></option>
								   <?php 
							   } ?>
							</select>
                    </div>

                  <div class="box-footer">
				  <center>
				      <input type="submit" class="btn btn-primary" value="Save"  name="add_assign">	
                  </center>
				  </div>
				  			
                </form>
				
				<?php
	  if(isset($_POST['add_assign']))
	  {
   $rfqid = $_POST['rfq_id'];		  
   $rfqname = $_POST['rfq_name'];
   $assignpersondata = $_POST['assign_person'];
   $assignpersondetail = explode('|',$assignpersondata);
   $associate_id = $assignpersondetail[0];
   $associate_name = $assignpersondetail[1];
   
$query1 = mysqli_query($conn,"INSERT INTO assign_rfq_detail VALUES('','$rfqname','$rfqid','$associate_name','$associate_id',now(),now(),'1')")or die(mysqli_error($conn));
if(!empty($query))
{
	echo"<script type=\"text/javascript\">window.location.href = 'rfq.php?';</script>";
	die;
}
else
{
	echo"Sorry,Not updated Details";
	die;
}

}
	  
	  
      ?>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	  
	  
	 
	  
	  
	  
	  
	  
	  
	  
	  
	  
     <?php
include("includes/footer.php"); 
?>
  </body>
</html>