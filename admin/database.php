<?php
ob_start();
session_start();

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','urjentupccodes');

//$dbs = new PDO("mysql:host=".DBHOST.";port=8889;dbname=".DBNAME, DBUSER, DBPASS);
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($conn->connect_error){
    die("connection could not be establihed");
}

//set timezone
date_default_timezone_set('Asia/Kolkata');