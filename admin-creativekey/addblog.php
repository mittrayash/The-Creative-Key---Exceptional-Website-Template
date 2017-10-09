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
        

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12 ">
              
              
                     <div class="container table-responsive col-md-12">
   
		     <form action='insertblog.php' method='post' enctype="multipart/form-data" >
    <input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

    <p><label>Title</label><br />
    <input type='text' name='postTitle' value='' class="form-control"></p>

    <p><label>Description</label><br />
    <textarea name='postDesc' cols='60' rows='10'></textarea></p>

    <p><label>Doc Link</label><br />
    <input type="text" name='postCont' cols='60' rows='10' class="form-control"></p>
<input type="file" name="image1" class="form-control col-md-4">

    <p><input type='submit' name='submit' value='Add' class="btn  btn-success"></p>

</form>

		    
		 
      
       <table class="table table-bordered" style="margin-top:50px;">
		    <thead>
		    
		       <tr>
		       
		        <th class="col-sm-2">Title</th>
		        <th class="col-sm-2">Description</th>
		        <th class="col-sm-3">Link</th>
		        <th class="col-sm-3">Image</th>
		        <th class="col-sm-2">Action</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php
		    $db=mysqli_connect('localhost','kunwaraabid567','Happyworld@159','urjentupccodes');
		    
		    $query="SELECT * FROM blog_post order by postID DESC";
		    $check=mysqli_query($db,$query) or die(mysqli_error($db));
		    while($row=mysqli_fetch_assoc($check)){
		    $title=$row['postitle'];
		    $vname=$row['postdesc'];
		     $vfb =$row['postcontent'];
		     $vimage=$row['postimage'];
                     $vid= $row['postID'];
		  
		    ?>
		      <tr>
		        <td><?php echo $title; ?></td>
                        <td><?php echo $vname; ?></td>
                        <td><?php echo $vfb; ?></td>
		        <td><img src="<?php echo $vimage; ?>" width="100" height="100"></td>
		        
		       
		        
		        <td>
		        	<button class="btn btn-primary" style="width:80px;"><a href="editblog.php?id=<?php echo $vid; ?>" style="color:#fff;">EDIT</button>
		        	<button class="btn btn-danger"><a href="deleteblog.php?id=<?php echo $vid; ?>" style="color:#fff">DELETE</button>
		        </td>
		      </tr>
		      <?php } ?>
		      
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
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
</script>
	  
 <?php include("includes/footer.php"); ?>  

