<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); //write the username
define('DB_PASSWORD', ''); //write the password
define('DB_NAME', 'form'); //write the db name


/* Attempt to connect to MySQL/MariaDB database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $state=$_POST['state'];
    $address=$_POST['address'];
    $date=$_POST['date'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

}
// Check connection
if (!$link ) {

    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
else{
    $sql="INSERT INTO `user_info`(name,gender,state,address,birthdate,mobile,email) VALUES ('$name','$gender','$state','$address','$date','$mobile','$email')";
    $result=mysqli_query($link,$sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        echo "some error occured.";
        die("ERROR: Could not connect. " . mysqli_connect_error());   
    }
}
?>