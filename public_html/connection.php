<?php
/*
$databaseHost = 'localhost';
$databaseName = 'ratemypolicticains';
$databaseUsername = 'root';
$databasePassword = 'root';

$databaseHost = 'localhost';
$databaseName = 'u587940520_ratemyp';
$databaseUsername = 'u587940520_ratemyp_u';
$databasePassword = '!@#123qweasdZXC';
*/
$databaseHost = 'localhost';
$databaseName = 'u159437940_ratemyp';
$databaseUsername = 'u159437940_ratemyp_u';
$databasePassword = 'rateMpOL!@#123';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

// Check connection
if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>

