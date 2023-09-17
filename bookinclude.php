<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'form'); 


$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($_SERVER['REQUEST_METHOD']=='POST' && (isset($_POST['name']) && $_POST['name']!="") && isset($_POST['submit'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $state=$_POST['state'];
    $address=$_POST['address'];
    $date=$_POST['date'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $trek=$_POST['trek'];
    $month=$_POST['month'];
    $date=$_POST['date'];
    $number=$_POST['number'];
}

if (!$link ) {

    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
else{
    
    if(isset($_POST['submit'])){
    $sql="INSERT INTO `user_info` (`name`,`gender`,`state`,`address`,`birthdate`,`mobile`,`email`,`trek`,`month`,`date`,`number`) VALUES ('$name','$gender','$state','$address','$date','$mobile','$email','$trek','$month','$date','$number')";
    // $sql="INSERT INTO `user_info` (`name`,`gender`,`state`,`address`,`birthdate`,`mobile`,`email`,`trek`,`month`,`date`,`number`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    // $params=array($name,$gender,$state,$address,$date,$mobile,$email,$trek,$month,$date,$number);

    $result=mysqli_query($link,$sql);
    
    
    // $result=mysqli_execute_query($link,$sql,$params);
    if($result){
        echo '<script>alert("Thank you for filling the form! Proceed further.")</script>';
    }
    else{
        echo "some error occured.";
        die("ERROR: Could not connect. " . mysqli_connect_error());   
    }
   

    }else{
        // echo "some error occured.";
        // die("ERROR: Could not connect. " . mysqli_connect_error());   
    }
}