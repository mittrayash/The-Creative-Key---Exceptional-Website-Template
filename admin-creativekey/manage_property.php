<?php
error_reporting(0);
require("connect.php");
include("includes/header.php");
include("includes/left_sidebar.php");

$idd=$_GET['del_id'];
if(isset($_GET['del_id']))
{
	mysqli_query($conn,"update players set is_active='0' Where player_id='$idd' " ) or die (mysqli_error($conn));
	header('Location:manage_player.php');						
}
	?>
<script>
	function getPlayer(idd){
	
			$.ajax({
			
				type: "POST",
				url: "ajax/ajax.php",
				data: {id: idd,funtion: 'getAllPlayer' },
				success: function(result){
				    obj= JSON.parse(result);
					$('#did').html(obj['0']['player_id']);
					$('#pnam').html(obj['0']['player_name']);
					$('#dob').html(obj['0']['dob']);
					$('#idtyp').html(obj['0']['id_type']);
					$('#idnum').html(obj['0']['id_number']);
					$('#ngols').html(obj['0']['no_of_goals']);
					$('#nofls').html(obj['0']['no_of_fouls']);
					$('#cdat').html(obj['0']['created_date']);
					$('#mdat').html(obj['0']['modify_date']);
					$('#isactive').html(obj['0']['is_active']);
				}
			});
	}
</script>
      
      <div class="content-wrapper">
        
        <section class="content-header">
          <h1>
            Player Management
            <small>Manage Player</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
           
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Player</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                            <th>S.No.</th>
			                <th>Player Name</th>
                            <th>Date Of Birth</th>
			                <th>Preview</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
								$i=1;
								$result= mysqli_query($conn,"SELECT * FROM players where is_active='1' order by player_id ASC ") or die (mysqli_error($conn));
								while ($row3= mysqli_fetch_array ($result) ){
								$id=$row3['player_id'];
								?>
                        <tr>
						 <td><?php echo $i; ?></td>
                            <td><?php echo $row3 ['player_name']; ?></td>
						    <td><?php echo $row3 ['dob']; ?></td>
							<!--<td><?php echo $row3 ['sports_name']; ?></td>-->
                            <td><span class="label label-success" style="cursor:pointer;" onClick="return getPlayer(<?php echo $row3 ['player_id'] ?>);" data-toggle="modal" data-target="#myModal" >Preview</span></td>
                            <td><a href="edit_player.php?edit_id=<?php echo $id; ?>"><span class="label label-primary" style="cursor:pointer;">Edit</span></a> &nbsp;&nbsp; <a href="manage_player.php?del_id=<?php echo $id; ?>"><span class="label label-danger" style="cursor:pointer;" onClick="return confirm('Are you sure, Delete this.');">Delete</span></a></td>
                        </tr>
						<?php $i++; } ?>
                    </tbody>
					</table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php
include("includes/footer.php"); 
	?>
  </body>
</html>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Preview</h3>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
		<tr><td width="50%">Player Id:</td><td><div id="did"></div></td></tr>
		<tr><td>Player Name:</td><td><div id="pnam"></div></td></tr>
		<tr><td>Date Of Birth:</td><td><div id="dob"></div></td></tr>
		<tr><td>Id Type:</td><td><div id="idtyp"></div></td></tr>
		<tr><td>Id Number:</td><td><div id="idnum"></div></td></tr>
		<tr><td>No Of Goals:</td><td><div id="ngols"></div></td></tr>
		<tr><td>No Of Fouls:</td><td><div id="nofls"></div></td></tr>
		<tr><td>Created Date:</td><td><div id="cdat"></div></td></tr>
		<tr><td>Modify Date:</td><td><div id="mdat"></div></td></tr>
    </table>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
	  <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>