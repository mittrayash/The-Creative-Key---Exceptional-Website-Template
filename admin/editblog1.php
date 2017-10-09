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
		
	<div class="container" style="padding-top:50px;">
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th class="col-sm-2">Title</th>
		        <th class="col-sm-5">Content</th>
		        <th class="col-md-2">Link</th>
		        <th class="col-sm-2">Upload Image</th>
		        <th class="col-sm-1"></th>
		      </tr>
		    </thead>
		    <tbody>
		    
		      <tr>
		      <?php
$db=mysqli_connect('localhost','kunwaraabid567','Turningpoint#915','urjentupccodes');
$id=$_GET['id'];

$query="SELECT * FROM blog_post WHERE postID='$id'";
$check=mysqli_query($db,$query) or die(mysqli_error($db));

$row=mysqli_fetch_assoc($check);
$title=$row['postitle'];
$desc=$row['postdesc'];
$content=$row['postcontent'];


?>
		      <form method="post" action="updateblog1.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
		        <td><input class="form-control" type="text" value="<?php echo $title; ?>" name="postTitle"></td>
		        <td> <textarea class="form-control" rows="15" id="comment" name="postDesc"><?php echo $desc; ?></textarea></td>
		        <td><input type="text" class="form-control" value="<?php echo $content;?>" name="link"></td>
		        <td><input type="file" class="form-control" name="image1"></td>
		        <td>
		        	<input class="btn btn-success" name="submit" type="submit" value="submit">
		        </td>
		        </form>
		       </tr>
		      
		    </tbody>
		 </table>
		 
		
	</div>
	
	

<?php 
//include header template
require('layout/footer.php'); 
?>



