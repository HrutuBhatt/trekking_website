<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    
    .topnav {
      overflow: hidden;
      background-color: #333;
    }
    
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    
    .topnav a:hover {
      background-color: cyan;
      color: black;
    }
    
    .topnav a.active {
      background-color: blue;
      color: white;
    }
    .profile{
      border:solid black;
      text-align: center;
      margin-left: 35%;
      margin-right:35%;
    }
    a :hover{
      color:blue;
    }
    .rvw{
    
      border: 2px solid grey;
      margin-left:15px;
      margin-right:15px;
      padding: 50px; 
    }
    </style>
</head>
<body>
    <div class="topnav">
        <a href="main.php" >Home</a>
        <a href="events.php">Events</a>
        <a href="contact.php">Contact</a>
        <a href="book.php">Book</a>
        <a class="active" href="profile.php">Profile</a>
      </div> 
      <h1>Your Profile:</h1>
      <div class="profile">
        
        <ul class="w3-ul">
          <li class="w3-jumbo w3-teal"><i class="material-icons w3-jumbo">person</i><br> </li>
        </ul>
        <!-- <p>Username:<b><?php echo $_SESSION['username']; ?></b></p> -->
        <p>Username:<b><?php 
        if(isset($_SESSION['username']))
        {echo $_SESSION['username'];}
        else
        {
          echo "user";
        }
        ?></b></p>
  </div>
  <br><br>
  <div class="profile">
      
      <a href="logout.php"><b style="font-size:20px;color:red;">Logout</b></a>
      <br><br>
      
      <a href="changepassword.php"><b style="font-size:20px;color:red;">Change Password</b></a><br><br>
     
      <a href="signout.php"><b style="font-size:20px;color:red;">SignOut</b></a><br><br>
      
      <a href="mybooking.php"><b style="font-size:20px;color:red;">My bookings</b></a><br><br>
      
      <a href="cancelbooking.php"><b style="font-size:20px;color:red;">Cancel Booking</b></a>
  </div>
  <br><br>
  <h2><b>Recent Reviews</b></h2>
  <div class="rvw">
    
  <?php

$link = new mysqli("localhost","root","","form");


$result = $link->query("SELECT * FROM review ORDER BY id DESC LIMIT 5");


while($rows=$result->fetch_assoc())
{

  echo "<br><b><u>Anonymous :</u></b><br>";
	echo $rows['feedback'];
  echo "<br>";
    
}
?>
  </div>
</body>

</html>
<?php


?>