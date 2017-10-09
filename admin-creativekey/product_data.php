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
      <div class="content-wrapper text-center">
        <!-- Content Header (Page header) -->
         <h1>
           PRODUCT DETAILS
                     </h1>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12 ">
              
              
                     <div class="container table-responsive col-md-12">
       		<table class="table table-striped table-bordered text-center" style="width:2400px;">
  <thead >
    <tr class="text-center" style="background:#133d69; color:#FFF;">
      <th class="text-center">Seller Name</th>
      <th class="text-center ">Product Name</th>
      <th class="text-center">Price</th>
      <th class="text-center ">Image 1</th>
      <th class="text-center">Image 2</th>
       <th class="text-center ">Image 3</th>
      <th class="text-center ">Image 4</th>
       <th class="text-center ">Minimum Order</th>
      <th class="text-center">Product Category</th>
       <th class="text-center">Product Specifications</th>
      <th class="text-center ">Payment Terms</th>
       <th class="text-center ">Delivery Time</th>
      <th class="text-center">Packaging Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Rahul</td>
      <td>Sweing Machine</td>
      <td>$900</td>
      <td>image1</td>
       <td>image2</td>
        <td>image3</td>
         <td>image4</td>
          <td>4</td>
           <td>industrial</td>
            <td>jfvnjefv</td>
            <td>jfvnjefv</td>
             <td>jfvnjefv</td>
              <td>jfvnjefv</td> 
           
      
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

