<?php
error_reporting(0);
require("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
$ID=$_GET['edit_id'];

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
                  <h3 class="box-title">Edit Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<?php
				$query=mysqli_query($conn, "select * from  associates where id='$ID'")or die(mysqli_error());
				$row=mysqli_fetch_array($query);
				?>
                <form role="form" method="post" name="form"  enctype="multipart/form-data">
                  <div class="box-body">
				  <div class="row col-md-6">
				  
					<div class="form-group">
					<label>Name</label>
					<input class="form-control" type="text" value="<?php echo $row['name'];?>" name="name" style="width:70%">
					</div>
					
					<div class="form-group">
					<label>Email Id</label>
					<input class="form-control" type="text" value="<?php echo $row['email'];?>" name="email" style="width:70%">
					</div>
					
					
					<div class="form-group">
					<label>Mobile No</label>
					<input class="form-control" type="text" value="<?php echo $row['mobile'];?>" name="mobile" style="width:70%">
					</div>
					
					<div class="form-group">
					<label>Address</label>
					<input class="form-control" type="text" value="<?php echo $row['address'];?>" name="address" style="width:70%">
					</div>
					
					<div class="form-group">
					<label>User Name</label>
					<input class="form-control" type="text" value="<?php echo $row['username'];?>" name="username" style="width:70%">
					</div>
					
					<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="password" value="<?php echo $row['password'];?>" name="password" style="width:70%">
					</div>
                    
					

                  <div class="box-footer">
				  <center>
				      <input type="submit" class="btn btn-primary" value="Save"  name="update_detail">	
                  </center>
				  </div>
				  			
                </form>
				
				<?php
	  if(isset($_POST['update_detail']))
	  {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
$query = mysqli_query($conn,"SELECT username from associates where username='$username'")or die(mysqli_error($conn));
if(mysqli_num_rows($query)>=1)
{
	echo"Sorry!This Username Alrready Exits!!!!";
	die;
}
$query1 = mysqli_query($conn,"UPDATE associates set name='$name',email = '$email', mobile = '$mobile', address = '$address', username = '$username', password = '$password' where id='$ID'")or die(mysqli_error($conn));
if(!empty($query))
{
	echo"<script type=\"text/javascript\">window.location.href = 'add_product.php?edit_id=$ID';</script>";
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