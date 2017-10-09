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
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>Home</a></li>
          <!--  <li class="active">Dashboard</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12 text-center ">
             <div class="container">
    	

            <div class="col-md-8 col-md-offset-1 text-center " style="border:1px solid #d6d6d6; padding:30px 0;box-shadow:0px 0px 12px #8D8D8D;">
            	<form class="col-md-12 pt50 " method="post" action="register.php" enctype="multipart/form-data">
  <div class="form-group col-md-6">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Please enter your email id" required>
  </div>
  <div class="form-group col-md-6">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password" placeholder="Please enter your password" required>
  </div>
  <div class="form-group col-md-6">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
</div>
<div class="form-group col-md-6">
  <label for="usr">Company Name:</label>
  <input type="text" class="form-control" id="company" placeholder="Company name" name="company" required>
</div>
<div class="form-group col-md-6">
  <label for="sel1">Location:</label>
  <select class="form-control" name="location" id="sel1" required>
    <option>Delhi</option>
    <option>Noida</option>
    <option>Vaishali</option>
    <option>Gurgaon</option>
  </select>
</div>
<div class="form-group col-md-6">
<h4>I am a</h4>
<label class="radio-inline">
      <input type="radio" name="optradio" value="supplier">Supplier
    </label>
 <label class="radio-inline">
      <input type="radio" name="optradio" value="buyer">Buyer
    </label>
  </div>
  <div class="form-group col-md-6">
  <label for="number">Phone no.:</label>
  <input type="number" class="form-control" name="number" id="number" required>
</div>
<div class="form-group col-md-6">
<label>Add photos:</label>
<input type="file" name="pic" accept="image/*">

  </div>

  <button type="submit" class="btn btn-success col-md-8 col-md-offset-2 mt10" name="submit" style="">Submit</button>
</form>

            </div>
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

