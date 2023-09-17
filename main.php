<?php
session_start();
// if(!isset($_SESSION['username']))
// {

//     header('location:SignIn.php');
//     // header('location:main.php');
// }

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

  <title>Home Page</title>
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

    .footer {
      background-color: black;
      color: white;
      text-align: center;
      height: 400px;
    }

    .dropbtn {
      background-color: #333;
      color: #f2f2f2;
      padding: 14pxs 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      margin: 0;
    }

    .dropbtn:hover,
    .dropbtn:focus {
      background-color: #2980B9;
    }

    .dropdown {
      overflow: hidden;
      display: inline-block;
      padding: 14px 16px;
      float: left;
      margin: 0;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 100px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      margin-left:400px;

    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown a:hover {
      background-color: cyan;
    }

    .show {
      display: block;
    }
    .login{
      margin-left:900px;
      margin-top:-42px;
    }
    .fa {
      padding: 20px;
      font-size: 30px;
      width: 70px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
    }

    .fa:hover {
      opacity: 0.7;
      background-color: grey;
      color: #f9fdff;
    }

    .fa-google {
      background: #fffefe;
      color: rgb(0, 0, 0);
    }

    .fa-linkedin {
      background: #ffffff;
      color: rgb(0, 0, 0);
    }

    .fa-instagram {
      background: #ffffff;
      color: rgb(0, 0, 0);

      
    }
  </style>

</head>

<body>

  <div class="topnav">
    <a class="active" href="main.php">Home</a>
    <a href="events.php">Events</a>
    <a href="contact.php">Contact</a>
    <a href="book.php">Book</a>
    <a href="profile.php">Profile</a>
    
    <a onclick="myFunction()" class="dropbtn">Others</a><br>
    <div id="myDropdown" class="dropdown-content">

      <a href="rent.php">Rent Gears</a><br>
      <a href="more.php">More Info</a><br>
      <a href="review2.php">Review</a>

    </div>
    <a href="signIn.php" class="login">Login</a>
  </div>
  <script>

    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>
  <style>
    .head {
      padding: 30px;
      text-align: center;
      background-color: rgb(255, 255, 0);
      height: 300px;
    }

    div.a {
      /* border: 0px solid black; */
      box-shadow:0 0 20px grey;
      /* background-color:rgb(177, 247, 184) ; */
      margin-top: 30px;
      margin-left:10%;
      margin-right:10%;
      padding-top: 80px;
      padding-right: 30px;
      padding-bottom: 80px;
      padding-left: 80px;
      /* background-image: linear-gradient(rgba(42, 27, 137, 0.3), rgba(229, 218, 240, 0)), url("https://tse3.mm.bing.net/th?id=OIP.6uSQvySzE6k0LtXS4XfNgQHaCf&pid=Api&P=0"); */
      background-repeat: no-repeat;
      background-size: 100% 100%;

      color:black;
    }

    h1 {
      text-align: center;
      color: rgb(2, 126, 62);
    }

    h2 {
      font-size: 40px;
      color: rgb(145, 8, 176);
      padding-left: 14px;
    }

    h3 {
      padding-left: 30px;
      color: blue;
      font-size: 35px;
    }

    p {
      padding-left: 40px;

    }

    body {
      text-align: center;
      font-size: 30px;

    }

    div.vof {
      background-color:beige;
      box-shadow:0 0 20px grey;
      margin-left: 390px;
      margin-right: 390px;
      margin-top: 10px;
      margin-bottom: 10px;
      padding: 20px;
      border-radius:20px;
    }


    .container {
      width: 100%;

    }

    @media (max-width: 767px) {

      h1,
      h2 {
        font-size: 22px;
        line-height: 30px;
      }

      .top-content .carousel-caption {
        bottom: 20px;
      }

      .top-content .carousel-indicators {
        display: none;
      }

    }

    @media (max-width: 575px) {

      .top-content .carousel-caption {
        bottom: 0;
        padding-bottom: 20px;
      }

      .top-content .carousel-caption-description {
        display: none;
      }

      .top-content h1,
      .top-content h2,
      .top-content h3 {
        font-size: 18px;
      }

      .position {
        position: absolute;
        bottom: 10%;
        z-index: 20;
        color: white;
        text-shadow: 0 1px 2px black;
      }

    }
  </style>
  <script>
    function myFunction1() {
      document.getElementById("demo1").innerHTML = "Ghangharia,HemkundSahib,Josimath";
    }
    function myFunction2() {
      document.getElementById("demo2").innerHTML = "kasol,manali,weichin valley,solang valley";
    }
    function myFunction3() {
      document.getElementById("demo3").innerHTML = "Haridwar,Rishikesh,Kedarnath";
    }
    function myFunction4() {
      document.getElementById("demo4").innerHTML = "Trek from Jobri to chikka,Shea goru,chandra taal lake";
    }

  </script>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
            <li data-target="#carousel-example" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="wp9983433-mountains-at-night-wallpapers.jpg" alt="First slide"
                style="height:700px; width:100%;" />
              <div class="carousel-caption">


              </div>
            </div>
            <div class="item">
              <img src="wp7029042-leh-ladakh-wallpapers.jpg" alt="Second slide" style="height:700px; width:100%;" />
              <div class="carousel-caption">


              </div>
            </div>
            <div class="item">
              <img src="wp2627929-himalayas-hd-wallpaper.jpg" alt="Second slide" style="height:700px; width:100%;" />
              <div class="carousel-caption">


              </div>
            </div>
            <div class="item">
              <img src="wp8047612-desktop-full-hd-4k-wallpapers.jpg" alt="Third slide"
                style="height:700px; width:100%;" />
              <div class="carousel-caption">


              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
            <span class="fa fa-arrow-left" aria-hidden="true"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
            <span class="fa fa-arrow-right" aria-hidden="true"></span>
          </a>
        </div>
        <div class="main-text hidden-xs">
          <div class="col-md-12 text-center">
            <br><br><br><br>
            <h1 style="color:white;font-size:50px;"><b>TREK AND TRAIL</b></h1>
            <h3 style="color:white;font-size:45px;"><b>BOOK YOUR TREK TODAY!!</b>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    .main-text {
      position: absolute;
      top: 50px;
      width: 96.66666666666666%;
      color: #FFF;
    }

    .btn-min-block {
      min-width: 170px;
      line-height: 26px;
    }

    .btn-clear {
      color: #FFF;
      border-color: #FFF;
      border-width: 2px;
      margin-right: 15px;
    }

    .btn-clear:hover {
      color: #000;
      background-color: #6699CC;
    }

    .arrowalign {
      top: 50%;
    }

    .arrowalign:hover {
      vertical-align: middle;
    }

    .carousel-control {
      color: #fff;
      top: 50%;
      bottom: auto;
      padding-top: 0px;
      width: 30px;
      height: 30px;
      text-shadow: none;
      opacity: 0.9;
    }

    .container2 {
      width: 60%;
      margin-left: 20%;

    }
  </style>

  <div class="a">
    <p><b>Experience the THRILL!!</b></p>
    <p><b>We provide you all the thrilling treks that you crave for...Join us today to have a vivid experience of
        breath-taking adventures and soul-calming sceneries.
        You will come back with dozens of memories and experience you never had before. </b></p>

  </div>


  <h2>Pictures from Past Trips:</h2>




  <div class="container2">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>

      </ol>
      <div class="carousel-inner">

        <div class="item active">
          <img src="wp5732015-valley-of-flowers-wallpapers.jpg" alt="Valley of Flowers"
            style="height:700px;width:100%;">
          <div class="carousel-caption">
            <h3 style="color:white;">Valley of Flowers</h3>
            <p><b>Dance along these young flowers</b></p>
          </div>
        </div>

        <div class="item">
          <img src="wp4528761-manali-wallpapers.jpg" alt="Kasol-Manali Trek" style="height:700px;width:100%;">
          <div class="carousel-caption">
            <h3 style="color:black;">kasol-Manali</h3>
            <p style="color:black;"><b>Perfect trek to go with your family and friends</b></p>
          </div>
        </div>

        <div class="item">
          <img src="wp2627943-himalayas-hd-wallpaper.jpg" alt="Kedarnath trek" style="height:700px; width:100%;">
          <div class="carousel-caption">
            <h3 style="color:black;">Kedarnath Trek</h3>
            <p style="color:black;"><b>Calm your soul with this aesthetic trek to kedarnath</b></p>
          </div>
        </div>

        <div class="item">
          <img src="wp7029042-leh-ladakh-wallpapers.jpg" alt="Hampta Pass trek" style="height:700px;width:100%;">
          <div class="carousel-caption">
            <h3 style="color:white;">Hampta-Pass</h3>
            <p><b>Experience the unexperienced!!</b></p>
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

  </div>
  </div>
  <h2> Here are some of our Best Treks!</h2><br>
  <div class="vof">
    <h3><u>Valley Of Flowers</u></h3>
    <button type="button" onclick="myFunction1()">Places:</button>
    <p id="demo1"></p>
    <p>Best time to visit :<b>july-october</b></p>
  </div>
  <br>

  <div class="vof">
    <h3><u>Kasol-Manali</u></h3>
    <button type="button" onclick="myFunction2()">Places:</button>
    <p id="demo2"></p>
    <p>Best time to visit :<b>october-may</b></p>
  </div>
  <br>

  <div class="vof">
    <h3><u>Kedarnath</u></h3>
    <button type="button" onclick="myFunction3()">Places:</button>
    <p id="demo3"></p>
    <p>Best time to visit :<b>April-June</b></p>
  </div>
  <br>

  <div class="vof">
    <h3><u>Hampta-Pass trek</u></h3>
    <button type="button" onclick="myFunction4()">Places:</button>
    <p id="demo4"></p>
    <p>Best time to visit :<b>June-july</b></p>
  </div>

  <h2>What adventure sports do you like??</h2>
  <br>
  <p>Here you can choose your favourite adventure sports.<a href="select.php">Select</a></p>
  
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        
        <style>
            div.card1{
                margin-left:30px;
                /* box-shadow:0 0 10px rgb(170, 170, 170); */
                padding:1px;
                margin-right:20%;
                font-size:20px;
                text-align:left;
            }
            .checked {
                color: rgb(251, 223, 13);
            }
            
            .sub{
                color:black;
                background-color: rgb(233, 226, 226);
            }
           
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>
    
       
        
        <h2>Reviews</h2>
        <div class="card1">
          
            <h4><i class="fa fa-user"></i>Anonymous</h4>
        
            <p>We hade a great experience of trekking in manali and had a great joy. Food was hygienic and healthy. Travel guides were also so friendly.</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        </div><br>
        <div class="card1">
            
            <h4><i class="fa fa-user"></i>Anonymous</h4>
            
            <p>Trip was well designed that it covered all imp places.</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        </div><br>
        <div class="card1">
           
            <h4><i class="fa fa-user"></i>Anonymous</h4>
            <p>Enjoyed a lot with my friends and explored and learnt so many things about lifestyle,food,adventures,etc..</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
    
  <div class="footer"><br><br>
    <p>&copy; Trek and Trail tourism and co.</p>
    <br>

    <a href="mailto:hrutubhatt04@gmail.com" class="fa fa-google"></a>
    <a href="https://www.linkedin.com/in/hrutu-bhatt-891095252" class="fa fa-linkedin"></a>
    <a href="https://instagram.com/_hrutubhatt_?igshid=ZDdkNTZiNTM=" class="fa fa-instagram"></a>
  </div>


</body>

</html>