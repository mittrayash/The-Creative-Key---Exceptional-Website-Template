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
        <section class="content-header">
          <h1>
            RFQ'S NAME
          </h1>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12 ">
              
              
                     <div class="container table-responsive col-md-12">
   <table class="table table-bordered text-center " style="width:2750px;background:#fff;">
  
      <thead>
         <tr style="background:#133d69; color:#FFF;">
         
         <th class="text-center " style="width:150px">Name of Product</th>
         <th class="text-center " style="width:100px">Quantity</th>
            <th class="text-center " style="width:100px">Price</th>
            <th class="text-center " style="width:300px">Specification</th>
            <th class="text-center " style="width:100px"> Image</th>
           
            <th class="text-center " style="width:300px">Message from supplier</th>
            <th class="text-center" style="width:300px">Shipping Terms</th>
            <th class="text-center" style="width:300px">Payment Terms</th>
            <th class="text-center" style="width:200px">Seller Contact info</th>
            
            <th class="text-center" style="width:300px">Comment1</th>
            <th class="text-center" style="width:300px">Comment2</th>
            <th class="text-center" style="width:300px">Comment3</th>
           
           
           
         </tr>
      </thead>
      
      <tbody>
	 
         <td class="text-center " style="width:150px">Name of Product</td>
         <td class="text-center " style="width:100px">Quantity</td>
            <td class="text-center " style="width:100px">Price</td>
            <td class="text-center " style="width:300px">Specification</td>
            <td class="text-center " style="width:100px">Image</td>
            <td class="text-center " style="width:300px">Message from supplier</td>
            <td class="text-center" style="width:300px">Shipping Terms</td>
            <td class="text-center" style="width:300px">Payment Terms</td>
            <td class="text-center" style="width:200px">Seller Contact info</td>
            <td class="text-center" style="width:300px">Comment1 with date</td>
            <td class="text-center" style="width:300px">Comment2 with date</td>
            <td class="text-center" style="width:300px">Comment3 with date </td>						
      </tbody>
     
   </table>
   <div class="text-center" style="margin-bottom:30px;">
   <button type="button" class="btn btn-success" style="width:15%">Save</button>
   <button type="button" class="btn btn-info" style="width:15%">Sent Report</button>
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

