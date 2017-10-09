<?php 
error_reporting(0);
include("../connect.php");
$fun=$_REQUEST['funtion'];
$res=call_user_func($fun);
echo $res;
function getAllowner()
	{		
		global $conn;	
		$result= mysqli_query($conn,"select * from owner where owner_id='$_REQUEST[id]'" ) or die (mysqli_error($conn));	
		$row3=mysqli_fetch_array($result); 	
		$data[]=$row3;	
		echo json_encode($data);
	}
function getAlltournament()
{
	
	global $conn;
	$result= mysqli_query($conn,"select * from tournaments where tournament_id='$_REQUEST[id]'" ) or die (mysqli_error($conn));
	$row3=mysqli_fetch_array($result); 
	$data[]=$row3;
	echo json_encode($data);
}
function getAllorganizer()
	{	global $conn;	
		$result= mysqli_query($conn,"select * from organizer where organizer_id='$_REQUEST[id]'" ) or die (mysqli_error($conn));	
		$row3=mysqli_fetch_array($result); 
		$data[]=$row3;
		echo json_encode($data);
	}
function getAllPlayer()
{
	
	global $conn;
	$result= mysqli_query($conn,"select * from players where player_id='$_REQUEST[id]'" ) or die (mysqli_error($conn));
	$row3=mysqli_fetch_array($result); 
	$data[]=$row3;
	echo json_encode($data);
}
function getAlltournamentdetails()
{
	
	global $conn;
	$result= mysqli_query($conn,"select * from tournaments_details where tournament_team_id='$_REQUEST[id]'" ) or die (mysqli_error($conn));
	$row3=mysqli_fetch_array($result); 
	$data[]=$row3;
	echo json_encode($data);
}
function getAllTeam()
{
	
	global $conn;
	$result= mysqli_query($conn,"select * from teams where team_id='$_REQUEST[id]'" ) or die (mysqli_error($conn));
	$row3=mysqli_fetch_array($result); 
	$data[]=$row3;
	echo json_encode($data);
}

function getAllFixture()
{
	
	global $conn;
	$result= mysqli_query($conn,"select * from fixtures where fixture_id='$_REQUEST[id]'" ) or die (mysqli_error($conn));
	$row3=mysqli_fetch_array($result); 
	$data[]=$row3;
	echo json_encode($data);
}

function getAllGroup()
{
	
	global $conn;
	$result= mysqli_query($conn,"select * from groups where group_id='$_REQUEST[id]'" ) or die (mysqli_error($conn));
	$row3=mysqli_fetch_array($result); 
	$data[]=$row3;
	echo json_encode($data);
}

function getAllSet()
{
	
	global $conn;
	$result= mysqli_query($conn,"select * from sets_detail where set_id='$_REQUEST[id]'" ) or die (mysqli_error($conn));
	$row3=mysqli_fetch_array($result); 
	$data[]=$row3;
	echo json_encode($data);
}

function getAllMatch()
{
	
	global $conn;
	$result= mysqli_query($conn,"select * from match_detail where match_id='$_REQUEST[id]'" ) or die (mysqli_error($conn));
	$row3=mysqli_fetch_array($result); 
	$data[]=$row3;
	echo json_encode($data);
}
?>	          	 