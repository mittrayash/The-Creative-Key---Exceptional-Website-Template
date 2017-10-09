<?php 

  session_start();
  require("connect.php");
  
  if(isset($_POST['log']))
  {
    $username=$_POST['uname'];
	$password=$_POST['pword'];
	
	$sql = "select * from admin where username='$username' and password='$password'";
	
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0)
		{
			
		
    // output data of each row
	
			while($row = mysqli_fetch_assoc($result))
			{
				$funame=$row['username'];
	           $fpword=$row['password'];
			   
			}
			// remember functionality
		if(isset($_REQUEST['remember']) && $_REQUEST['remember']!=null  )
		{
			
			setcookie('usrname',base64_encode($funame),time() +(86400 * 365),'/');
			setcookie('paswd',base64_encode($fpword),time() +(86400 * 365),'/');
			
		}
		else{
			setcookie('usrname',$funame,time()-3600,'/');
			setcookie('paswd',$pword,time()-3600,'/');
			
		}
			
			if($funame==$_POST['uname'] && $fpword==$_POST['pword'])
			   {
				  $_SESSION['name']=$funame;
				  header("location: membership.php");
			   }
		}
		else 
		{
			echo "0 results";
		}

		mysqli_close($conn);
	
	//$sql=mysqli_query("select * from a_users where username='$username' and password='$password'");
	
	/*$row=mysql_fetch_array($sql);
	$funame=$row['username'];
	$fpword=$row['password'];
	
	   if($funame==$_POST['uname'] && $fpword=$_POST['pword'])
	   {
	      header("location: home.php");
	   }*/
	}

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Creativekey</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>CreativeKey Admin</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="uname" value="<?php echo (isset($_COOKIE['usrname']) && $_COOKIE['usrname']!=null )?base64_decode($_COOKIE['usrname']):''; ?>" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="pword" value="<?php echo (isset($_COOKIE['paswd']) && $_COOKIE['paswd']!=null )?base64_decode($_COOKIE['paswd']):''; ?>" required>
            <span class="glyphicon glyphicon-lock form-control-feedback" ></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember" value='1' <?php echo (isset($_COOKIE['usrname']) && $_COOKIE['usrname']!=null && $_COOKIE['paswd']!=null )?"checked='checked'":''; ?> > Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="log"  class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <!--  <div class="social-auth-links text-center">
         <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div>-->
               
      <!--  <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a> -->

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>

