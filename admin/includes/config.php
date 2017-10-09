<?php
ob_start();
session_start();


//database credentials
define('DBHOST','localhost');
define('DBUSER','kunwaraabid567');
define('DBPASS','Happyworld@159');
define('DBNAME','urjentupccodes');

//application address
define('DIR','http://thecreativekey.com/admin');
define('SITEEMAIL','webmaster@site.com');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>
