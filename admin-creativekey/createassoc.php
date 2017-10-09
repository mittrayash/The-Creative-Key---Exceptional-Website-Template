<?php 
include("connect.php");

if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$city=$_POST['city'];
$add=$_POST['add'];
$userid=$_POST['userid'];
$username=$_POST['username'];
$password=$_POST['password'];

$query1="SELECT username FROM associates WHERE username='$username'";
$check1=mysqli_query($conn,$query1) or die(mysqli_error($conn));


if(mysqli_num_rows($check1)>=1)
           {
            echo"name already exists";
           }
         else
            { 

$query="INSERT INTO associates (fname,lname,mobile,email,city,address,userid,username,password,assigned,created_date,modify_date,is_active) VALUES('$fname','$lname','$mobile','$email','$city','$add','$userid','$username','$password','0',now(),now(),'1') ";

$check=mysqli_query($conn,$query) or die(mysqli_error($conn));

if($check){
header('Location: dashboard.php');
}


}
}


?>
