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
                        <li class="current"><a href="memberpag.php">HOME</a></li>
			<li class=""><a href="logout.php">LOGOUT</a></li>
                    </ul>
                </nav>
		</div>		<!-- /main nav -->
	</header>
	<div class="container" style="margin-top:50px;">
		<div class="row">       
			    
               <a href="memberpage.php"  style="color:#fff"> <button class="col-md-2 btn btn-primary" style="margin-left:10px;">BLOG</button></a>
                <a href="testimonials.php" style="color:#fff"><button class="col-md-2 btn btn-primary" style="margin-left:10px;">TESTIMONIAL</button></a>
                        
                <a href="addmembers.php"  style="color:#fff"> <button class="active col-md-2 btn btn-primary" style="margin-left:10px;">TEAM</button></a>

                  
		</div>
	</div>	
	<div class="container" style="padding-top:50px;">
		<table class="table table-bordered">
		    <thead>
		      <tr>
		       <?php
$db=mysqli_connect('localhost','kunwaraabid567','Turningpoint#915','urjentupccodes');
$id=$_GET['id'];

$query="SELECT * FROM team_members WHERE member_id='$id'";
$check=mysqli_query($db,$query) or die(mysqli_error($db));

$row=mysqli_fetch_assoc($check);
$title=$row['member_name'];
$desc=$row['fb_link'];
$content=$row['ld_link'];


?>
		        <th class="col-sm-2">Member Name</th>
		        <th class="col-sm-2">Image</th>
		        <th class="col-sm-3">Facebook Profile Link</th>
		        <th class="col-sm-3">Linkedin Profile Link</th>
		        <th class="col-sm-2"></th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		      <form method="post" action="updatemem1.php?id=<?php echo $id; ?>" enctype="multipart/form-data" >
		        <td><input class="form-control" type="text" name="name" value="<?php echo $title; ?>"></td>
		         <td><input type="file" class="form-control" name="image1" accept="image/*"></td>
		        <td><input class="form-control" type="text" value="<?php echo $desc; ?>" name="link1"></td>
		        <td><input class="form-control" type="text" value="<?php echo $content; ?>" name="link2"></td>
		        <td>
		        	<input type="submit" name="submit" class="btn btn-success" value="submit">
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
