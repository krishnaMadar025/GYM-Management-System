<?php
$host     = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = ""; // Mysql password 
$db_name  = "gym"; // Database name 

// Connect to server and select databse.
$con = mysqli_connect($host, $username, $password, $db_name);
// Check connection
if (!$con) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error($con);
}
?>
