<?php
//script to create the connection to the database
ob_implicit_flush (true); 

$username = "root";
$password = "p";
$hostname = "localhost"; 


$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
echo "Connected to MySQLyeah";


$selected = mysql_select_db("WSM",$dbhandle)
  or die("Could not select examples");
?>
