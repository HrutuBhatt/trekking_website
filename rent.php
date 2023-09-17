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
    *{
      box-sizing:border-box;
    }
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
    .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  padding:10px;
  border:.5px black;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
.out{
display:flex;
padding:20px;

}

  </style>
  <body>
    <div class="topnav">
        <a href="main.php" >Home</a>
        <a href="events.php">Events</a>
        <a href="contact.php">Contact</a>
        <a href="book.php">Book</a>
        <a href="profile.php">Profile</a>
        <a class="active" href="rent.php">Rent Gears</a>
        <a href="more.php">More Info</a>
    </div>
    <h3>You can rent trekking gears here!!</h3>
    <h5>you can collect your gear at trek basecamp</h5>
    
    <hr>
   
    
    <div class="out">
        <div class="card">
            <a href="">
          <img src="https://tse3.mm.bing.net/th?id=OIP.hIhuD4VVuDAykA9Wg9ibHAHaIq&pid=Api&P=0"  style="width:100%;height: 400px;">
          </a>
          <div class="container">
            <h4><b>Backpack</b></h4> 
            <p>35Rs/day</p> 
            <form method="post">
            
            <label style="font-size:25px;">Number of People</label>
    <select name="number1" >
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
    </select>
            <label>Select Date:</label><br>
            From:<input type="date" id="date" name="date1" required>
            To:<input type="date" id="date" name="date2" required><br>
            <input  type="submit" name="add1" value="Add"></input>
            <button class="remove" name="remove1">Remove</button>
</form>
          </div>
        </div>
        <div class="card">
            <a href="rent.php">
          <img src="https://tse2.mm.bing.net/th?id=OIP.WHnINKF7txWe6fIw6sRZbgHaE7&pid=Api&P=0"  style="width:100%;height: 400px;"></a>
          <div class="container">
            <h4><b>Trek Shoes</b></h4> 
            <p >40Rs/day</p> 
            
           <form method="post">
            <label style="font-size:25px;">Number of People</label>
    <select name="number2" >
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
    </select>
            <label>Select Date:</label><br>
            From:<input type="date" id="date" name="date3" required>
            To:<input type="date" id="date" name="date4" required><br>
            <input type="submit" name="add2" value="Add"></input>
            <button class="remove" name="remove2">Remove</button>
</form>
          </div>
        </div>
        <div class="card">
          <a href="rent.php"><img src="https://tse3.mm.bing.net/th?id=OIP.rtTiL4Iqa2w7UmOsrenf6AHaHa&pid=Api&P=0"  style="width:100%;height: 400px;"></a>
          <div class="container">
            <h4><b>Jacket</b></h4> 
            <p>40Rs/day</p> 
            <form method="post">
            <label style="font-size:25px;">Number of People</label>
    <select name="number3" >
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
    </select>
            <label>Select Date:</label><br>
            From:<input type="date" id="date" name="date5" required>
            To:<input type="date" id="date" name="date6" required><br>
            <input type="submit" name="add3" value="Add"></input>
            <button class="remove" name="remove3">Remove</button>
</form>
          </div>
        </div>
        </div>
    </form>
        

  </body>
</head>
</html>
<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'form'); 


$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if (!$link ) {

    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
else{
  
  if(isset($_POST['add1'])){
    $email_id=$_SESSION['username'];
    $number1=$_POST['number1'];
    $date1=$_POST['date1'];
    $date2=$_POST['date2'];
    $sql="INSERT INTO `cart` (`email_id`,`product_name`,`price`,`number`,`rent_from`,`rent_to`) VALUES ('$email_id','bag','35','$number1','$date1','$date2')";
    
    $result=mysqli_query($link,$sql);
      
      
  
    if($result){
      echo '<script>alert("Trekking bag is added to you list")</script>';
    }
    else{
      echo "Error in bag.";
    }
  }
  if(isset($_POST['add2'])){
    $email_id=$_SESSION['username'];
    $number2=$_POST['number2'];
    $date3=$_POST['date3'];
    $date4=$_POST['date4'];
    $sql="INSERT INTO `cart` (`email_id`,`product_name`,`price`,`number`,`rent_from`,`rent_to`) VALUES ('$email_id','shoes','40','$number2','$date3','$date4')";
    
    $result=mysqli_query($link,$sql);
      
      if($result){
        echo '<script>alert("Shoes are added to you list")</script>';
    }
  }
  if(isset($_POST['add3'])){
    $email_id=$_SESSION['username'];
    $number3=$_POST['number3'];
    $date5=$_POST['date5'];
    $date6=$_POST['date6'];
    $sql="INSERT INTO `cart` (`email_id`,`product_name`,`price`,`number`,`rent_from`,`rent_to`) VALUES ('$email_id','jacket','40','$number3','$date5','$date6')";
    
    $result=mysqli_query($link,$sql);
      
    if($result){
      echo '<script>alert("Jacket is added to you list")</script>';
    }
   
  }
  if(isset($_POST['remove1'])){
   
    $date1=$_POST['date1'];
    $date2=$_POST['date2'];
    $sql="DELETE FROM `cart` WHERE product_name='bag' AND rent_from='$date1' AND rent_to='$date2'";
    
    $result=mysqli_query($link,$sql);
      
    if($result){
      echo '<script>alert("Trekking bag is removed from you list")</script>';
    }
   
  }
  if(isset($_POST['remove2'])){
   
    $date3=$_POST['date3'];
    $date4=$_POST['date4'];
    $sql="DELETE FROM `cart` WHERE product_name='shoes' AND rent_from='$date3' AND rent_to='$date4'";
    
    $result=mysqli_query($link,$sql);
      
    if($result){
      echo '<script>alert("Shoes are removed from you list")</script>';
    }
   
  }
  if(isset($_POST['remove3'])){
    
    $date5=$_POST['date5'];
    $date6=$_POST['date6'];
    $sql="DELETE FROM `cart` WHERE product_name='jacket' AND rent_from='$date5' AND rent_to='$date6'";
    
    $result=mysqli_query($link,$sql);
      
    if($result){
        echo '<script>alert("Jacket is removed from you list")</script>';
    }
   
  }
        // echo "some error occured. inside else";
        // die("ERROR: Could not connect. " . mysqli_connect_error());   
        $username=$_SESSION['username'];
        $sql = "SELECT * FROM `cart` WHERE email_id='$username'";
        $result=mysqli_query($link,$sql);
        if($result){

        }else{
          echo "Error occured";
        }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>My Item:</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>product_name</th>
				<th>number</th>
				<th>rent_from</th>
				<th>rent_to</th>
        <!-- <th>Remove</th> -->
			</tr>
			
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['product_name'];?></td>
				<td><?php echo $rows['number'];?></td>
				<td><?php echo $rows['rent_from'];?></td>
				<td><?php echo $rows['rent_to'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
