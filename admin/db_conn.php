<?php
$host = 'localhost'; //127.0.0.1
$db_username = 'root';
$db_password = '';
$database = 'e-kaksha';

$con = mysqli_connect($host, $db_username, $db_password, $database);

// if(!$con){
//     die('Connection Error '.mysqli_connect_errno());
// } 
if(!$con)
{
    die('Connection error '.mysqli_connect_errno());
}

?>