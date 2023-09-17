<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <style>
       .topnav {
        overflow: hidden;
        background-color: #333;
        position: fixed;
        width:100%;
        top:0;
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
      body{
        background-color:rgba(0, 172, 203, 0.4);
        background-image:url("wp8047612-desktop-full-hd-4k-wallpapers.jpg");
        height: 100%;
        background-repeat: no-repeat;
        
        /* background-size: 300px 100px; */
        font-size: 150%;
      }
      h1{
        color:rgb(67, 30, 94);
      }
      label{
        font-size: 30px;
      }
  /* input[type=text,email,tel], select, textarea {
  width: 40%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  
  width: 75%;
  margin-top: 6px;
} */

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
.box{
  border: grey;
  background-color:white;
  margin-left:25%;
  margin-right:25%;
  
}
label{
 
  font-size:25px;
}
    </style>
    <script>
      var trekObject = {
        "Kasol-Manali": {
          "April": ["12", "19", "25"],
          "May": ["3", "13", "22", "29"],
          "June": ["5", "14", "25"]    
        },
        "Hampta-pass": {
          "November": ["3", "11", "23"],
          "December": ["1", "13", "23"],
           "January": ["4", "14", "24"]
        },
        "Valley of Flowers": {
          "July": ["2", "12", "22"],
          "August": ["3", "13", "23"],
          "Sepetember": ["4", "14", "24"]    
        },
        "Rishikesh": {
          "April": ["4", "21", "27"],
          "May": ["3", "13", "22", "29"],
          "June": ["5", "14", "25"]    
        },
        "Himalayas-Basecamp": {
          "November": ["3", "11", "23"],
          "December": ["1", "13", "23"],
          "January": ["4", "14", "24"]    
        },
        "Kedarkantha": {
           "November": ["3", "11", "23"],
          "December": ["1", "13", "23"],
          "January": ["4", "14", "24"]     
        },
        "Saputara": {
          "April": ["13", "20", "26"],
          "May": ["4", "14", "23", "30"],
          "June": ["6", "15", "26"]    
        }
      }
      window.onload = function() {
        var trekSel = document.getElementById("trek");
        var monthSel = document.getElementById("month");
        var dateSel = document.getElementById("date");
        for (var x in trekObject) {
          trekSel.options[trekSel.options.length] = new Option(x, x);
        }
        trekSel.onchange = function() {
          
          dateSel.length = 1;
          monthSel.length = 1;
          
          for (var y in trekObject[this.value]) {
            monthSel.options[monthSel.options.length] = new Option(y, y);
          }
        }
        monthSel.onchange = function() {
         
          dateSel.length = 1;
         
          var z = trekObject[trekSel.value][this.value];
          for (var i = 0; i < z.length; i++) {
            dateSel.options[dateSel.options.length] = new Option(z[i], z[i]);
          }
        }
      }
      </script>
    <title>Forms</title>
  </head>
  <body>
    <div class="topnav">
      <a href="main.php">Home</a>
      <a href="events.php">Events</a>
      <a href="contact.php">Contact</a>
      <a class="active" href="book.php">Book</a>
      <a href="profile.php">Profile</a>
      
    </div>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" >
      <br><br>
      <div class="box">
    <h1><u># Book Now!!</u></h1>
    
    
    
      <h1><b><u>Select your Trek:</u></b></h1>
      
    <br>
   
    <b style=" margin-right:20%;">Trek:</b><br>
   
    <select name="trek" id="trek" style="width:30%;min-height:15%; margin-left:15px">
      <option value="" selected="selected">Select Trek</option><br>
    </select>
    <br><br>
 <b style=" margin-right:19%;"> Month:</b><br> <select name="month" id="month" style="width:30%;height:20%;margin-left:15px">
      <option value="" selected="selected">Please select the trek first</option>
    </select>
    <br><br>
 <b style=" margin-right:20%;"> Date:</b><br> <select name="date" id="date" style="width:30%;height:20%;margin-left:15px">
      <option value="" selected="selected">Please select the month first</option>
    </select>
    <br><br>
    <label style="font-size:25px;margin-left:15px">Number of People</label>
    <select name="number" >
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
  
  <div>
 
  <br>
  <div class="mb-3">
    
    
  </div>
    <h2><b><u>Personal Details:</u></b></h2>
    
        <label style=" margin-right:25%;" >Full Name:</label><br>
        <input type="text" name="name" required>
      
   
      <br><br>
      <div class="gender">
        <label>Gender:</label>
        <input class="gender1" type="radio" name="gender" value="male">Male
        <input class="gender1" type="radio" name="gender" value="female">Female
        <input class="gender1" type="radio" name="gender" value="other">Other
      </div>
      <br>
      
      
      <label style=" margin-right:32%;">State:</label><br>
        <input type="text" name="state" required>
      
      <br><br>
      <div>
        <label style="text-align:left;margin-right:29%;">Address:</label><br>
        <textarea name="address" rows="2" cols="38">Address</textarea>
      </div>
      <br>
      <div>
          <label for="date" style="text-align:left;margin-right:28%;"> Birth date</label><br>
          <input type="date" id="date" name="date" required>
      </div><br>
      <h2><u>Contact Details:</u></h2>
      <div>
        <label style="text-align:left;margin-right:19%;">Mobile Number:</label><br>
        <input type="tel" name="mobile" placeholder="1023407601" required>
      </div><br>
      <div>
        <label style="text-align:left;margin-right:30%;">Email:</label><br>
        <input type="email" name="email" required>
      </div>
      <div class="btn">
        <button type="submit" name="submit">Submit</button>
      </div><br>
    </div>
    
  </form>
  <div class="pagination">
  <a href="#">&laquo;</a>
  <a class="active" href="#">1</a>
  <a href="payment.php">2</a>
  
  <a href="#">&raquo;</a>
</div>
    </div>
</body>
</html>


 
<?php
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root'); 
// define('DB_PASSWORD', ''); 
// define('DB_NAME', 'form'); 


// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// if($_SERVER['REQUEST_METHOD']=='POST'){
//     $name=$_POST['name'];
//     $gender=$_POST['gender'];
//     $state=$_POST['state'];
//     $address=$_POST['address'];
//     $date=$_POST['date'];
//     $mobile=$_POST['mobile'];
//     $email=$_POST['email'];
//     $trek=$_POST['trek'];
//     $month=$_POST['month'];
//     $date=$_POST['date'];
//     $number=$_POST['number'];
// }

// if (!$link ) {

//     die("ERROR: Could not connect. " . mysqli_connect_error());
// } 
// else{
//     $sql="INSERT INTO `user_info` (`name`,`gender`,`state`,`address`,`birthdate`,`mobile`,`email`,`trek`,`month`,`date`,`number`) VALUES ('$name','$gender','$state','$address','$date','$mobile','$email','$trek','$month','$date','$number')";
//     // $sql="INSERT INTO `user_info` (`name`,`gender`,`state`,`address`,`birthdate`,`mobile`,`email`,`trek`,`month`,`date`,`number`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
//     // $params=array($name,$gender,$state,$address,$date,$mobile,$email,$trek,$month,$date,$number);

    
    
//     $result=mysqli_query($link,$sql);
//     // $result=mysqli_execute_query($link,$sql,$params);
    
    
//     if($result){
//         echo "Thank you for filling the form! Proceed further.";

//     }else{
//         echo "some error occured.";
//         die("ERROR: Could not connect. " . mysqli_connect_error());   
//     }
// }

include 'bookinclude.php';

?>


