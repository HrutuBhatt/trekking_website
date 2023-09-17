<?php
   session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <style>
            label{
                font-size:20px;
            }
            input{
                width:20%;
            }
            form{
                margin-left:25px;

            }
        </style>

    </head>
    <body>
        <form method="post">
        <label>Old password: </label><br>
        <input type="password" name="currentpassword"><br><br>
        <label>New password: </label><br>
        <input type="password" name="newpassword"><br><br>
        <button type="submit" name="submit">Submit</button>
        </form>
    </body>
    </html>

<?php
$username=$_SESSION['username'];
// $password=$_SESSION['password'];
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); //write the username
define('DB_PASSWORD', ''); //write the password
define('DB_NAME', 'form'); 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$link ) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 


// $current_pwd=$_POST['currentpassword'];
// $new_pwd=$_POST['newpassword'];
// $sql="SELECT password FROM registration WHERE password='$current_pwd'";
// $result=mysqli_query($link,$sql);
if(isset($_POST['currentpassword']) && isset($_POST['newpassword']))
// if($result)
{
    $current_pwd=$_POST['currentpassword'];
    $new_pwd=$_POST['newpassword'];
    $sql="SELECT * FROM registration WHERE password='$current_pwd' AND email='$username'";
    
    $result=mysqli_query($link,$sql);
    $num=mysqli_fetch_array($result);
    if($num>0)
    {
        $sql="UPDATE registration SET `password`='$new_pwd' WHERE `email`='$username'";
        
        mysqli_commit($link);
        $result2=mysqli_execute_query($link,$sql);
    // header('location:profile.php');

    
    echo "Password updated.";
    }
    // if($result && isset($_POST['submit'])){
   
    // $sql="UPDATE registration SET `password`='$new_pwd' WHERE `email`='$username'";
    
    // // header('location:profile.php');

    
    // echo "Password updated.";
    // } 
    else{
        echo "current password did not match.";
    }
}else{
    // echo "current password did not match.";
}
?>