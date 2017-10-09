<?php
include("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 

$count = "SELECT * FROM property where is_active=1";
$property_count = mysqli_query($conn, $count);
$property_count =  mysqli_num_rows($property_count);



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
         <th class="text-center ">Product Name</th>
         <th class="text-center ">Category</th>
            <th class="text-center ">Brief Description</th>
            <th class="text-center ">Specification</th>
            <th class="text-center ">Image Upload</th>
            <th class="text-center ">Order Value</th>
            <th class="text-center ">Lead Type</th>
            <th class="text-center ">Quantity</th>
           <th class="text-center ">Shipping Terms</th>
           <th class="text-center ">Payment Terms</th>
           <th class="text-center ">Improve Sellers Response</th>
           <th class="text-center ">Associate</th>
         </tr>
      </thead>
      
      <tbody>
							
      </tbody>
      <td>shkhhs</td>
      <td>wdh133523</td>
    <td>Sanjoy</td>
    <td>fshvhshvs</td>
    <td>8355624563</td>
    <td>Ashok vihar</td>
    <td>Standard</td>
    <td>gnegegdgjk</td>
    <td></td>
    <td></td>
    <td></td>
    <td><select style="margin-bottom:5px;">
           <option>Associate</option>
           <option>Associate</option>
           <option>Associate</option>
           <option>Associate</option>
           </select>
           <br>
           <button type="button" class="btn btn-success">Asign</button>
           </td>
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

