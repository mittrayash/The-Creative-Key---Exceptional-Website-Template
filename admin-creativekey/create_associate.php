<?php
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
?>
    
   <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Create Associate 
            
          </h1>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12 ">
            
            	<form method="POST" action="createassoc.php"> 
                	<div class="form-group col-md-4">
                    	<label>First Name</label>
                        <input class="form-control" type="text" name="fname" placeholder="first name">
                    </div> 
                    
                    <div class="form-group col-md-4">
                    	<label>Last Name</label>
                        <input class="form-control" type="text" name="lname" placeholder="last name">
                    </div> 
                    
                    <div class="form-group col-md-4">
                    	<label>Mobile No.</label>
                        <input class="form-control" type="number" name="mobile" placeholder="mobile no.">
                    </div> 
                    
                    <div class="form-group col-md-4">
                    	<label>Email</label>
                        <input class="form-control" type="email" name="email" placeholder="email">
                    </div> 
                    
                    <div class="form-group col-md-4">
                    	<label>city</label>
                        <input class="form-control" type="text" name="city" placeholder="city name">
                    </div> 
                    
                    <div class="form-group col-md-4">
                    	<label>Address</label>
                        <input class="form-control" type="text" name="add" placeholder="address">
                    </div> 
                    
                    <div class="form-group col-md-4">
                    	<label>User Id</label>
                        <input class="form-control" type="text" name="userid" placeholder="user id">
                    </div> 
                    
                    <div class="form-group col-md-4">
                    	<label>User Name</label>
                        <input class="form-control" type="text" name="username" placeholder="User name">
                    </div> 
                    
                    <div class="form-group col-md-4">
                    	<label>Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>  
                    
                    <div class="col-md-12 text-center">
                    	<input type="submit" name="submit" placeholder="submit" class="btn btn-success">
                    </div>
                    
                </form>
                
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

