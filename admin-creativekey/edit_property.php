<?php
error_reporting(0);
require("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php"); 
if(!empty($_GET['edit_id']))
{
  $ID=$_GET['edit_id'];
}
else
{
  $ID=$_GET['del_id']; 
}

$idd=$_GET['del_id'];
	if(isset($_GET['del_id'])){
		mysqli_query($conn,"update players set  player_image=null,player_gallery=null,player_video=null where player_id='$idd' " ) or die (mysqli_error($conn));
		echo "<script type=\"text/javascript\">window.location.href = 'edit_player.php?edit_id='$ID';</script>";			
	}
	?>
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'country_id='+val,
	success: function(data){
		$("#ddlView").html(data);
	}
	});
}


function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}

$(document).ready(function()
{
	$('#cal').datepicker();
});
</script>





<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Player Management
            <small>Edit Player</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
           <!-- <li class="active">Edit Clinic</li> -->
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Player</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<?php
				$query=mysqli_query($conn, "select * from  players where player_id='$ID'")or die(mysqli_error());
				$row=mysqli_fetch_array($query);
				$player_image= $row['player_image'];
				$target = "uploadbracketCategory/";
				$srcc = $target.$player_image; 
				?>
				
				
			
                <form role="form" method="post" name="form" enctype="multipart/form-data" id="my-form">
                  <div class="box-body">
				  <div class="row col-md-6">
				  <div class="form-group">
                      <label for="PlayerName">Player Name:</label>
                      <input type="text" class="form-control" name="player_name" value="<?php echo $row['player_name']; ?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					<div class="form-group">
                      <label for="PlayerName">Nick Name:</label>
                      <input type="text" class="form-control" name="nick_name" value="<?php echo $row['nick_name']; ?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					
					<div class="form-group">
                      <label for="playerid">Player Description:</label>
                      <input type="text" class="form-control" required maxlength="30"   value="<?php echo $row['player_description']; ?>" name="player_description" style="height:150px; width:70%;">
                    </div>
					
					<div class="form-group">
                      <label for="player_image">Player Image:</label>
                      <input type="file" class="img" name="player_image" accept="image/*" value="<?php echo $row['player_image'];?>"  maxlength="30" placeholder="" style="width:70%" id="player_image">
                    </div>
					
					<div class="form-group">
                      <label for="player_gallery">Player Gallery:</label>
                      <input type="file" class="img" name="player_gallery" accept="image/*" value="<?php echo $row['player_gallery'];?>"  maxlength="30" placeholder="" style="width:70%" id="player_gallery">
                    </div>
					
					<div class="form-group">
                      <label for="player_video">Player Video:</label>
                      <input type="file" class="img" name="player_video" accept="video/*" value="<?php echo $row['player_video'];?>"  maxlength="30" placeholder="" style="width:70%" id="player_video">
                    </div>
					
					
					<div class="form-group">
                      <label for="PlayerName">Height:</label>
                      <input type="text" class="form-control" name="height" value="<?php echo $row['height']; ?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					

                     <div class="form-group">
                      <label for="PlayerName">Weight:</label>
                      <input type="text" class="form-control" name="weight" value="<?php echo $row['weight']; ?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
                        

                                    <div class="form-group">
                      <label for="PlayerName">Position:</label>
                      <input type="text" class="form-control" name="position" value="<?php echo $row['position']; ?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>

					<div class="form-group">
                      <label for="PlayerName">Education:</label>
                      <input type="text" class="form-control" name="education" value="<?php echo $row['education']; ?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					
					<div class="form-group">
                      <label for="PlayerName">Player Profile:</label>
                      <input type="text" class="form-control" name="player_profile" value="<?php echo $row['player_profile']; ?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					
					<div class="form-group">
                      <label for="PlayerName">Strength:</label>
                      <input type="text" class="form-control" name="strength" value="<?php echo $row['strength']; ?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					
					<div class="form-group">
                      <label for="PlayerName">Weakness:</label>
                      <input type="text" class="form-control" name="weakness" value="<?php echo $row['weakness']; ?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					
					<div class="form-group">
                      <label for="PlayerName">Career Heigh:</label>
                      <input type="text" class="form-control" name="career_high" value="<?php echo $row['career_high']; ?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					<div class="form-group">
                      <label for="PlayerName">Style:</label>
                      <input type="text" class="form-control" name="style" value="<?php echo $row['style']; ?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					<div class="form-group">
                      <label for="PlayerName">Quotes:</label>
                      <input type="text" class="form-control" name="quotes" value="<?php echo $row['quotes']; ?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Team:</label>
						<select required id="team-list" name="team_id" class="form-control" onChange="getState(this.value)" style="width:70%">
							<option value="0" disabled selected style='display:none;'>Select Team</option>
							<?php
					   
						  $query=mysqli_query($conn,"select * from  teams")or die(mysqli_error());
						while ($row4= mysqli_fetch_array ($query) ){
						?>							   
					   <option value="<?php echo $row4 ['team_id']; ?>" <?php if($row4 ['team_id'] == $row['team_id']){?> selected="selected" <?php }?>> <?php echo $row4 ['team_name']; ?></option>
					   <?php } ?>
							  
						</select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Sports:</label>
						<select required id="sports-list" name="sports_id" class="form-control" onChange="getState(this.value)" style="width:70%">
							<option value="0" disabled selected style='display:none;'>Select Sports</option>
							<?php
					   
						  $query=mysqli_query($conn,"select * from  sports_category")or die(mysqli_error());
						while ($row4= mysqli_fetch_array ($query) ){
						?>							   
					   <option value="<?php echo $row4 ['sports_id']; ?>" <?php if($row4 ['sports_id'] == $row['sports_id']){?> selected="selected" <?php }?>> <?php echo $row4 ['sports_name']; ?></option>
					   <?php } ?>
							  
						</select>
                    </div>
					<div class="form-group">
                      <label for="DateOfBirth">Date Of Birth:</label>
                      <input id="cal" type="text" class="form-control" name="dob" value="<?php echo $row['dob'];?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					<div class="form-group">
                      <label for="TypeId">Id Type:</label>
                      <input type="text" class="form-control" name="id_type" value="<?php echo $row['id_type'];?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					<div class="form-group">
                      <label for="IdNumber">Id Number:</label>
                      <input type="text" class="form-control" name="id_number" value="<?php echo $row['id_number'];?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Country:</label>
						<select required id="ddCOview" name="country_id" class="form-control" onChange="getState(this.value)" style="width:70%">
							<option value="0" disabled selected style='display:none;'>Select Country</option>
							<?php
					   
						  $query=mysqli_query($conn,"select * from  country")or die(mysqli_error());
						while ($row4= mysqli_fetch_array ($query) ){
						?>							   
					   <option value="<?php echo $row4 ['countryid']; ?>" <?php if($row4 ['countryid'] == $row['country_id']){?> selected="selected" <?php }?>> <?php echo $row4 ['countryname']; ?></option>
					   <?php } ?>
							  
						</select>
                    </div>
					
				<script language="javascript">// for number validation
				function Check(e) {
					var code = this.event.keyCode;
					if ((code<48||code>57 ) // numerical
					  &&code!==46 //delete
					  &&code!==8  //back space
					  &&code!==37 // <- arrow 
					  &&code!==39) // -> arrow
				   {
					 this.event.preventDefault();        
					}
				}
				</script>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">City:</label>
                     <select required  id="ddlVieww" name="city_id" class="form-control" style="width:70%">
						<option value="0" disabled selected style='display:none;'>Select City</option>
					  <?php
					   
						  $query=mysqli_query($conn,"select * from  city")or die(mysqli_error());
						while ($row3= mysqli_fetch_array ($query) ){
						?>							   
					   <option value="<?php echo $row3 ['CityId']; ?>" <?php if($row3 ['CityId'] == $row['city_id']){?> selected="selected" <?php }?>> <?php echo $row3 ['CityName']; ?></option>
					   <?php } ?></select>
					    
                    </div>
					
					<div class="form-group">
                      <label for="NoOfGoals">No Of Matches:</label>
                      <input type="text" class="form-control" name="no_of_matches" value="<?php echo $row['no_of_matches'];?>"  required maxlength="30" placeholder="" style="width:70%">
                    </div>
					
					</div>
					<div class="row col-md-6">
					<?php 
					    $id= $row['player_id'];
						$player_image= $row['player_image'];
						$target = "uploadbracketCategory/";
						$srcc = $target.$player_image; 
					?>
					<table class="table">
					<thead>
					
					 <div class="driphoto">
					<tr>
						<th>Player Photo</th>
						<th>Photo Name</th>
						<th>Delete</th>
					</tr>
					</thead>
					<tr>
						<td><image src="<?php echo $srcc ;?>" alt="image" width="40" height="40"></td>
						<td><?php echo $player_image; ?></td>
						<td> <a href="edit_player.php?del_id=<?php echo $id; ?>"><span class="label label-danger" style="cursor:pointer;" onClick="return confirm('Are you sure, Delete this.');">Delete</span></a></td>
					</tr>
					
					</table>
					
					
					<?php 
					    $id= $row['player_id'];
						$player_gallery= $row['player_gallery'];
						$target = "uploadbracketCategory/";
						$srcc = $target.$player_gallery; 
					?>
					<table class="table">
					<thead>
					
					 <div class="driphoto">
					<tr>
						<th>Player Gallery</th>
						<th>Gallery Name</th>
						<th>Delete</th>
					</tr>
					</thead>
					<tr>
						<td><image src="<?php echo $srcc ;?>" alt="image" width="40" height="40"></td>
						<td><?php echo $player_gallery; ?></td>
						<td> <a href="edit_player.php?del_id=<?php echo $id; ?>"><span class="label label-danger" style="cursor:pointer;" onClick="return confirm('Are you sure, Delete this.');">Delete</span></a></td>
					</tr>
					
					</table>
					
					
					<?php 
					    $id= $row['player_id'];
						$player_video= $row['player_video'];
						$target = "uploadbracketCategory/";
						$srcc = $target.$player_video; 
					?>
					<table class="table">
					<thead>
					
					 <div class="driphoto">
					<tr>
						<th>Player Video</th>
						<th>Video Name</th>
						<th>Delete</th>
					</tr>
					</thead>
					<tr>
						<td><image src="<?php echo $srcc ;?>" alt="image" width="40" height="40"></td>
						<td><?php echo $player_video; ?></td>
						<td> <a href="edit_player.php?del_id=<?php echo $id; ?>"><span class="label label-danger" style="cursor:pointer;" onClick="return confirm('Are you sure, Delete this.');">Delete</span></a></td>
					</tr>
					
					</table>
					
					</div>
					
                  </div><!-- /.box-body -->
                  <div class="box-footer">
				  <center>
				      <input type="submit" class="btn btn-primary" value="Save"  name="update" onClick = "return Checkfiles()"/>	
                  </center>
				  </div>
				  	
                 <script type="text/javascript">
					function Checkfiles()
					{
						var fup = document.getElementById('player_image');
						var fileName = fup.value;
						var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

					if(ext =="png" || ext=="gif" || ext=="jpeg" || ext=="jpg" || ext=="")
					{
						return playergallery();
						
					}
					else
					{
						alert("Upload Images only");
						return false;
					}
					function playergallery()
						{
							
						  	var fup1 = document.getElementById('player_gallery');
						    var fileName1 = fup1.value;
						    var ext1 = fileName1.substring(fileName1.lastIndexOf('.') + 1);
							
							if(ext1 =="png" || ext1=="gif" || ext1=="jpeg" || ext1=="jpg" || ext1=="")
							{
								return playervideo();								
							}
							else
							{
								alert("Upload Images only");
								return false;
							}
							
							function playervideo()
						     {
							
								var fup3 = document.getElementById('player_video');
								var fileName3 = fup3.value;
								var ext3 = fileName3.substring(fileName3.lastIndexOf('.') + 1);
								
								if(ext3 =="mp4" || ext3=="avi" || ext3=="mov" || ext3=="3gp" || ext3=="mpeg" || ext3=="3GPP Audio/Video" || ext3=="")
								{
									return true;
								}
								else
								{
									alert("Upload videos only");
									return false;
								}
							
						}
						}
					}
				</script>
				
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php
include("includes/footer.php"); 
if (isset($_POST['update'])) 
{
            
         if(!empty($_FILES["player_image"]["name"]))
	    {
	     $player_image = $_FILES["player_image"]["name"];
	    }
	    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	    $target_dir = "uploadbracketCategory/";
	    $target_file = $target_dir . basename($_FILES["player_image"]["name"]);	    
	    $temp = explode(".", $_FILES["player_image"]["name"]);
	    $newfilename = round(microtime(true)) . '.' . end($temp);				
	    move_uploaded_file($_FILES['player_image']['tmp_name'], "uploadbracketCategory/" .$_FILES["player_image"]['name']);
	   
	    if(!empty($_FILES["player_gallery"]["name"]))
	    {
	     $player_gallery = $_FILES["player_gallery"]["name"];
	    }
	    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	    $target_dir = "uploadbracketCategory/";
	    $target_file = $target_dir . basename($_FILES["player_gallery"]["name"]);	    
	    $temp = explode(".", $_FILES["player_gallery"]["name"]);
	    $newfilename = round(microtime(true)) . '.' . end($temp);				
	    move_uploaded_file($_FILES['player_gallery']['tmp_name'], "uploadbracketCategory/" .$_FILES["player_gallery"]['name']);
	   
	   if(!empty($_FILES["player_video"]["name"]))
	    {
	     $player_video = $_FILES["player_video"]["name"];
	    }
	    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	    $target_dir = "uploadbracketCategory/";
	    $target_file = $target_dir . basename($_FILES["player_video"]["name"]);	    
	    $temp = explode(".", $_FILES["player_video"]["name"]);
	    $newfilename = round(microtime(true)) . '.' . end($temp);				
	    move_uploaded_file($_FILES['player_video']['tmp_name'], "uploadbracketCategory/" .$_FILES["player_video"]['name']);
	   
	$player_name=$_POST['player_name'];    
	$nick_name=$_POST['nick_name'];
	$player_description=$_POST['player_description'];
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	$position=$_POST['position'];
	$education =$_POST['education'];
	$player_profile =$_POST['player_profile'];
	$strength =$_POST['strength'];
	$weakness =$_POST['weakness'];
	$career_high =$_POST['career_high'];
	$style =$_POST['style'];
	$quotes =$_POST['quotes'];	
	$team_id=$_POST['team_id'];
	$sports_id=$_POST['sports_id'];
	$dob=$_POST['dob'];
	$id_type=$_POST['id_type'];
	$id_number=$_POST['id_number'];
	$country_id=$_POST['country_id'];
	$city_id=$_POST['city_id'];
	$no_of_matches=$_POST['no_of_matches'];
	
	
  
 $sql="UPDATE players SET player_name='$player_name', nick_name='$nick_name',player_image ='$player_image',player_description='$player_description',player_gallery='$player_gallery',player_video='$player_video',height ='$height',weight ='$weight',position = '$position',education ='$education', player_profile='$player_profile',strength ='$strength',weakness ='$weakness',career_high='$career_high',style='$style',quotes ='$quotes',
 team_id='$team_id' , sports_id='$sports_id',dob='$dob',id_type='$id_type',id_number='$id_number',country_id='$country_id',city_id='$city_id',no_of_matches= '$no_of_matches' WHERE player_id = '$ID'";
	

 if (mysqli_query($conn,$sql)) 
	{
		 flash( 'playersupdate','Player successfully edited' );
	  echo "<script type=\"text/javascript\">window.location.href = 'manage_player.php?edit_id=$ID';</script>";
      exit;
	}
	else
	{
		echo "Error updating record: " . mysqli_error($conn);
	}	
}
?>

  </body>
</html>