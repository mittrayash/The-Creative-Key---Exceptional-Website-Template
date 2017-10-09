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
            RFQ's Posted
            <small></small>
          </h1>
          <ol class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>Home</a></li>
          <!--  <li class="active">RFQ's Posted</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
          	<div class="text-center col-md-12">
          		<ul class="nav nav-pills">
          			<li class="active"><a data-toggle="pill" href="#allrfq">ALL RFQ's</a></li>
    				<li><a data-toggle="pill" href="#private">PRIVATE</a></li>
          		</ul>
          	</div>
          	<div class="tab-content">
            <div id="allrfq" class="col-lg-12 tab-pane fade in active">
              
              
                     <div class="container table-responsive col-md-12">
   <table class="table table-bordered text-center " style="width:2200px;background:#fff;" >
  
      <thead>
         <tr style="background:#133d69; color:#FFF;">
            <th class="text-center" style="width:150px">Name</th>
            <th class="text-center" style="width:150px">Category</th>
            <th class="text-center" style="width:300px">Brief Description</th>
            <th class="text-center" style="width:300px">Specification</th>
            <th class="text-center" style="width:100px">Image</th>
            <th class="text-center" style="width:100px">Quantity</th>
            <th class="text-center" style="width:100px">unit</th>
            <th class="text-center" style="width:300px">Shipping Terms</th>
            <th class="text-center" style="width:300px">Payment Terms</th>
            <th class="text-center" style="width:150px">Response</th>
         </tr>
      </thead>
      
      <tbody>
      <?php
      $query = mysqli_query($conn,"Select * from rfq_post where is_active='1' and isr_hire='0' order by id DESC")or die(mysqli_error($conn));
	  while($row = mysqli_fetch_array($query))
	  {
      ?>
         <tr>
            <td><?php echo$row['product_name'];?></td>
			<td><?php echo$row['category'];?></td>
            <td><?php echo$row['description'];?></td>
			<td><?php echo$row['specifiaction'];?></td>
            <td><img src="../<?php echo $row['image'] ?>" style="width:50px;height:50px;"></td>
            <td><?php echo $row['quantity']; ?></td>
            <td ><?php echo $row['unit'];?></td>
	        <td ><?php echo $row['shipment'];?></td>
            <td ><?php echo $row['payment'];?></td>
			<td ><?php if(!empty($row['isr_2x']))
			           {
						echo "2X";   
					   }?><br><?php if(!empty($row['isr_sponser']))
					   {
						echo"Sponsored RFQ's";
					   }?><br><?php if(!empty($row['isr_competative']))
					   {
						echo"Competative";
					   }
					   
			              ?></td>
         </tr>
        
	  <?php } ?>
      </tbody>
    
   </table>
   </div>
               
            </div>
            
            <div id="private" class="col-lg-12 tab-pane fade in ">
              
              
                     <div class="container table-responsive col-md-12">
 <table class="table table-bordered text-center " style="width:2200px;background:#fff;" >
  
      <thead>
         <tr style="background:#133d69; color:#FFF;">
            <th class="text-center" style="width:150px">Name</th>
            <th class="text-center" style="width:150px">Category</th>
            <th class="text-center" style="width:300px">Brief Dadslkfn</th>
            <th class="text-center" style="width:300px">Specification</th>
            <th class="text-center" style="width:100px">Image</th>
            <th class="text-center" style="width:100px">Quantity</th>
            <th class="text-center" style="width:100px">unit</th>
            <th class="text-center" style="width:300px">Shipping Terms</th>
            <th class="text-center" style="width:300px">Payment Terms</th>
            
            <th class="text-center" style="width:100px">Assign</th>
         </tr>
      </thead>
      
      <tbody>
      <?php
      $query = mysqli_query($conn,"SELECT *
FROM   rfq_post
WHERE  NOT EXISTS
  (SELECT *
   FROM `assign_rfq_detail`
   WHERE  assign_rfq_detail.rfq_id = rfq_post.id)")or die(mysqli_error($conn));
	  while($row = mysqli_fetch_array($query))
	  {
       ?>
         <tr>
            <td><?php echo $row['product_name'] ?></td>
            <td><?php echo$row['category'];?></td>
            <td><?php echo$row['description'];?></td>
			<td><?php echo$row['specifiaction'];?></td>
            <td><img src="../<?php echo $row['image'] ?>" style="width:50px;height:50px;"></td>
            <td><?php echo $row['quantity']; ?></td>
            <td ><?php echo $row['unit'];?></td>
	        <td ><?php echo $row['shipment'];?></td>
            <td ><?php echo $row['payment'];?></td>
		
            <td class="text-center" style="width:100px"><a href="assign_rfq.php?assignto=<?php echo $row['id']; ?>" class="btn btn-success">ASSIGN</button></td>
         </tr>
         
         <?php } ?>
      </tbody>
    
   </table>
   </div>
               
            </div>
            </div>
            
            
            <!-- ./col -->
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

