<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Forms</title>
  </head>
  <body>
  <div >
  <form action="C:\xampp\htdocs\project\formdata\book.html" method="post">
      <h2>Personal Details:</h2>
      <div>
        <label>Full Name:</label><br>
        <input type="text" name="name" required>
      </div>
      <div class="gender">
        <label>Gender:</label><br>
        <input class="gender1" type="radio" name="gender" value="male">Male
        <input class="gender1" type="radio" name="gender" value="female">Female
        <input class="gender1" type="radio" name="gender" value="other">Other
      </div>
      <div>
      <label>State:</label><br>
        <input type="text" name="state" required>
      </div>
      
      <div>
        <label>Address:</label><br>
        <textarea name="address" rows="4" cols="80">Address</textarea>
      </div>
      <div>
          <label for="date">Enter your birth date</label><br>
          <input type="date" id="date" name="date" required>
      </div><br>
      <h2>Contact Details:</h2>
      <div>
        <label>Mobile Number:</label><br>
        <input type="tel" name="mobile" placeholder="1023407601" required>
      </div>
      <div>
        <label>Email:</label><br>
        <input type="email" name="email" required>
      </div>
      <div class="btn">
        <button type="submit">Submit</button>
      </div>
      
    </form>
  </div>
  </body>
</html>
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