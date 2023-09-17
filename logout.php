<?php
session_start();
// unset($_SESSION['username']);
// header("location:signIn.php");
// $uname = base64_decode(urldecode($_GET["uname"]));
if (isset($_SESSION['username'])) {
    session_unset(); 
    header("Location:signIn.php?msg='You have successfully logged out.'");
} else {
    header("Location:signIn.php?msg='Your session has expired. Please login again.'");
}
?>