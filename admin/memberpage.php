<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Core Members Page';

//include header template
require('layout/header.php'); 
?>


 <header id="navigation" class=" navbar-default">
 	<div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="memberpage.php" style="margin-left:0px;">
						
		       The Creative Key
						
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse" role="navigation">
                    <ul id="nav" class="nav navbar-nav navbar-right " style="padding-left:2%;">
                        <li class="current"><a href="memberpage.php">HOME</a></li>
			<li class=""><a href="logout.php">LOGOUT</a></li>
                    </ul>
                </nav>
		</div>		<!-- /main nav -->
	</header>
	<div class="container" style="margin-top:50px;">
		<div class="row">       
			    
               <a href="memberpage.php"  style="color:#fff"> <button class="active col-md-2 btn btn-primary" style="margin-left:10px;">BLOG</button></a>
                <a href="testimonials.php" style="color:#fff"><button class="col-md-2 btn btn-primary" style="margin-left:10px;">TESTIMONIAL</button></a>
                        
                <a href="addmembers.php"  style="color:#fff"> <button class="col-md-2 btn btn-primary" style="margin-left:10px;">TEAM</button></a>

                  
		</div>
	</div>	
	<div class="container" style="padding-top:50px;">
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th class="col-sm-2">Title</th>
		        <th class="col-sm-5">Content</th>
		        <th class="col-sm-2">Link</th>
		        <th class="col-sm-2">Upload Image</th>
		        <th class="col-sm-1"></th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		      <form method="post" action="insertblog.php" enctype="multipart/form-data">
		        <td><input class="form-control" type="text" placeholder="title...." name="postTitle"></td>
		        <td> <textarea class="form-control" rows="4" id="comment" name="link1"></textarea></td>
		        <td><input type="text" class="form-control" name="link2" placeholder="link...."></td>
		        <td><input type="file" class="form-control" name="fileToUpload"></td>
		        <td>
		        	<input class="btn btn-success" name="submit" type="submit" value="submit">
		        </td>
		        </form>
		       </tr>
		      
		    </tbody>
		 </table>
		 
		  <table class="table table-bordered" style="margin-top:50px;">
		    <thead>
		       <tr>
		        <th class="col-sm-2">Title</th>
		        <th class="col-sm-5">Content</th>
		        
		        <th class="col-sm-2">Link</th>
		        <th class="col-sm-2">Upload Image</th>
		        <th class="col-sm-1"></th>
		      </tr>
		    </thead>
		    <tbody>
		        <?php
		    $db=mysqli_connect('localhost','kunwaraabid567','Turningpoint#915','urjentupccodes');
		    
		    $query="SELECT * FROM blog_post order by postID desc";
		    $check=mysqli_query($db,$query) or die(mysqli_error($db));
		    while($row=mysqli_fetch_assoc($check)){
		    $vid=$row['postID'];
		    $vname=$row['postitle'];
		    $vimage=$row['postimage'];
		    $vfb=$row['postdesc'];
		    $vld=$row['postcontent'];
		    
		    ?>
		      <tr>
		        <td><?php echo $vname; ?></td>
		        <td><?php echo $vfb; ?></td>
		        <td><?php echo $vld; ?></td>
		        <td><img src="<?php echo $vimage;?>" width="100" height="100"></td>
		        <td>
		        	<button class="btn btn-primary" style="width:80px;margin-bottom:10px;"><a href="editblog1.php?id=<?php echo $vid; ?>" style="color:#fff;">EDIT</button>
		        	<button class="btn btn-danger"><a href="deleteblog.php?id=<?php echo $vid; ?>" style="color:#fff">DELETE</button>
		        </td>
		      </tr>
		      <?php } ?>
		    </tbody>
		  </table>
	</div>
	
	

<?php 
//include header template
require('layout/footer.php'); 
?>
