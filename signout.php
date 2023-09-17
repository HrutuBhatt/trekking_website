<?php 
session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); //write the username
define('DB_PASSWORD', ''); //write the password
define('DB_NAME', 'form'); //write the db name

/* Attempt to connect to MySQL/MariaDB database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$link ) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 

$username=$_SESSION['username'];
$sql="DELETE FROM `registration` WHERE email='$username'";
if(mysqli_query($link,$sql)){
    echo "record deleted successfully";
}
header('location:signUp.php');

?>