<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-size: 30px;
      text-align: center;
      background-image:linear-gradient(rgb(254, 254, 146),white,rgb(247, 232, 252),rgb(208, 235, 242),rgb(238, 239, 200));
    }

    h1 {
      text-align: center;
      color: green;
      border: 2px solid green;
    }

    h3 {
      color: rgb(12, 79, 233);
      font-size: 35px;
    }

    h4 {
      color: rgb(190, 82, 82);
      border: 2px solid black;
      margin-left: 30%;
      margin-right: 30%;
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
    div.list{
      text-align:center;
    }
    ul{
      display: inline-block;
      line-height: 180%;
      margin: 0px;
    }
    .card-deck .card{
      border:solid grey;
      width:35%;
      margin-left:20px;
      height:520px;
    }
    .card-deck{
      border:2px; 
      display:flex;
    }
    .r{
      text-align:right;
      
    }
    .l{
      text-align:left;
    }
    .middle{
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      text-align: center;
    }
    .card :hover .card-img-top{
      opacity:0.3;
    }
    .card :hover .middle{
      opacity:.5;
    }
    .text {
      background-color: #959595;
      color: white;
      font-size: 16px;
      padding: 16px 32px;
    }
  </style>
</head>

<body>
  <div class="topnav">
    <a href="main.php">Home</a>
    
    <a class="active" href="events.php">Events</a>
    <a href="contact.php">Contact</a>
    <a href="book.php">Book</a>
    <a href="profile.php">Profile</a>
  </div>
  <h1>EVENTS</h1>
  <div class="card-deck">

<div class="card"><a href="Himalayas.html">
<img class="card-img-top"
src="https://images.thrillophilia.com/image/upload/s--VHK30JzW--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/131/344/original/1534857286_shutterstock_9649486.jpg.jpg"  alt="Himalayn Base-camp" style="width:100%;height:300px;"></a>
<div class="middle">
  <div class="text">Hello</div>
</div>
<div class="card-body">

<h5 class="card-title">Himalayan Basecamp</h5>

<p class=""><div class="l">12D/11N&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;12999/-</b></div> </p>
<p>Available:
<?php
//  include 'connect.php';
 $sql = "SELECT * FROM `user_info` WHERE trek='Himalayas-Basecamp'";
 $result=mysqli_query($link,$sql);
 if($result){
  $total=0;
  if(mysqli_num_rows($result)>0){
   
    while($row = mysqli_fetch_assoc($result)){
      // $s="SELECT number FROM `user_info` WHERE trek='Kasol-Manali'";

      // echo "$s";
      $s=$row["number"];
      $total+=(int)$s;
    }
  }
    $avail=300-$total;
    echo " $avail";
 }else{
   echo "Error occured";
 }

?>
</p>
</div>
</div>
<div class="card"> <a href="rishikesh.html">
<img class="card-img-top"

src="https://tse3.mm.bing.net/th?id=OIP.BZnIlJBAARXYNDiznearNAHaE8&pid=Api&P=0" alt="Haridwar-Rishikesh" style="width:100%;height:300px;">
</a>
<div class="card-body">
<h5 class="card-title">Haridwar-Rishikesh</h5>
<p class=""><div class="l">9D/8N&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;8999/-</b></div> </p>
<p>Available:
<?php
//  include 'connect.php';
 $sql = "SELECT * FROM `user_info` WHERE trek='Rishikesh'";
 $result=mysqli_query($link,$sql);
 if($result){
  $total=0;
  if(mysqli_num_rows($result)>0){
   
    while($row = mysqli_fetch_assoc($result)){
      // $s="SELECT number FROM `user_info` WHERE trek='Kasol-Manali'";

      // echo "$s";
      $s=$row["number"];
      $total+=(int)$s;
    }
  }
    $avail=300-$total;
    echo " $avail";
 }else{
   echo "Error occured";
 }

?>
</p>
</div>
</div>
<div class="card"><a href="Kedarkantha.html">
<img class="card-img-top"
src="https://tse1.mm.bing.net/th?id=OIP.kFiHuTr2edj1FMOnh_vO8wHaED&pid=Api&P=0" alt="Kedarkantha" style="width:100%;height:300px;"></a>
<div class="card-body">
<h5 class="card-title">Kedarkantha</h5>
<p class=""><div class="l">10D/9N&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;10999/-</b></div> </p>
<p>Available:
<?php
//  include 'connect.php';
 $sql = "SELECT * FROM `user_info` WHERE trek='Kedarkantha'";
 $result=mysqli_query($link,$sql);
 if($result){
  $total=0;
  if(mysqli_num_rows($result)>0){
   
    while($row = mysqli_fetch_assoc($result)){
      // $s="SELECT number FROM `user_info` WHERE trek='Kasol-Manali'";

      // echo "$s";
      $s=$row["number"];
      $total+=(int)$s;
    }
  }
    $avail=300-$total;
    echo " $avail";
 }else{
   echo "Error occured";
 }

?>
</p>

</div>
</div>
  </div><br><br>
  <div class="card-deck">
<div class="card"><a href="manali.html">
<img class="card-img-top"
src="https://tse4.mm.bing.net/th?id=OIP.c2_4yvEDsVTjTixvbX52rgHaEK&pid=Api&P=0" alt="Manali" style="width:100%;height:300px;">
<div class="card-body"></a>
<h5 class="card-title">Manali</h5>
<p class=""><div class="l">10D/11N&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;10999/-</b></div> </p>
<p>Available:
<?php
//  include 'connect.php';
 $sql = "SELECT * FROM `user_info` WHERE trek='Kasol-Manali'";
 $result=mysqli_query($link,$sql);
 if($result){
  $total=0;
  if(mysqli_num_rows($result)>0){
   
    while($row = mysqli_fetch_assoc($result)){
      // $s="SELECT number FROM `user_info` WHERE trek='Kasol-Manali'";

      // echo "$s";
      $s=$row["number"];
      $total+=(int)$s;
    }
  }
    $avail=300-$total;
    echo " $avail";
 }else{
   echo "Error occured";
 }

?>
</p>
</div>
</div>
<div class="card"><a href="saputara.html">
<img class="card-img-top"
src="https://tse1.mm.bing.net/th?id=OIP.gXD7vO8xbMkOZirLinWUJwHaDj&pid=Api&P=0" alt="Saputara" style="width:100%;height:300px;"></a>
<div class="card-body">
<h5 class="card-title">Saputara</h5>
<p class=""><div class="l">2D/1N&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2999/-</b></div> </p>
<p>Available:
<?php
//  include 'connect.php';
 $sql = "SELECT * FROM `user_info` WHERE trek='Saputara'";
 $result=mysqli_query($link,$sql);
 if($result){
  $total=0;
  if(mysqli_num_rows($result)>0){
   
    while($row = mysqli_fetch_assoc($result)){
      // $s="SELECT number FROM `user_info` WHERE trek='Kasol-Manali'";

      // echo "$s";
      $s=$row["number"];
      $total+=(int)$s;
    }
  }
    $avail=300-$total;
    echo " $avail";
 }else{
   echo "Error occured";
 }

?>
</p>

</div>
</div>
<div class="card"><a href="vof.html">
<img class="card-img-top"
src="wp5732015-valley-of-flowers-wallpapers.jpg" alt="" style="width:100%;height:300px;"></a>
<div class="card-body">
<h5 class="card-title">Valley Of Flowers</h5>
<p class=""><div class="l">8D/7N&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;8999/-</b></div> </p>
<p>Available: 
<?php
//  echo "Currently Unavilable";
 $sql = "SELECT * FROM `user_info` WHERE trek='Valley of Flowers'";
 $result=mysqli_query($link,$sql);
 if($result){
  $total=0;
  if(mysqli_num_rows($result)>0){
   
    while($row = mysqli_fetch_assoc($result)){
      
      $s=$row["number"];
      $total+=(int)$s;
    }
  }
    $avail=300-$total;
    echo " $avail";
 }else{
   echo "Error occured";
 }
?>
</p>

</div>
</div>
</div>
  <h3><u>APRIL-JUNE</u></h3>
  <h4>1.MANALI BASECAMP</h4>

  <p>10DAYS/11NIGHTS</p>
  <div class="list">
  <ul>
  <li> april: 12,19,25</li>
  <li> may: 3,13,22,29</li>
  <li> june: 5,14,25</li>
  </ul>
  <p>=>cost: 10999/- pp</p>
  </div>
  <h4>2.SAPUTARA</h4>
  <p>2DAYS/1NIGHT</p>
  <ul>
  <li>april: 13,20,26</li>
  <li>may: 4,14,23,30</li>
  <li>june: 6,15,26</li>
  </ul>
  <p>=>cost: 2999/- pp</p>
  <h4>3.HARIDWAR/RISHIKESH</h4>
  <p>9DAYS/8NIGHTS</p>
  <ul>
  <li>april: 14,21,27</li>
  <li>may: 3,13,22,29</li>
  <li>june: 5,14,25</li>
  </ul>
  <p>=>cost: 8999/- pp</p>
  <h3><u>JULY-SEPTEMBER</u></h3>
  <h4>1.VALLEY OF FLOWERS</h4>
  <p>8DAYS/9NIGHTS</p>
  <ul>
  <li>july: 2,12,22</li>
  <li>august: 3,13,23</li>
  <li>september: 4,14,24</li>
  </ul>
  <p>=>cost: 7999/- pp</p>
  <h4>2.MUNNAR</h4>
  <p>10DAYS/11NIGHTS</p>
  <ul>
  <li>july: 2,12,22</li>
  <li>august: 3,13,23</li>
  <li>september: 4,14,24</li>
  </ul>
  <p>=>cost: 10999/- pp</p>
  <h3><u>NOV-JAN WINTER CAMPS</u></h3>
  <h4>1.KEDARKANTHA</h4>
  <p>10DAYS/9NIGHTS</p>
  <ul>
  <li>november: 3,11,23</li>
  <li>december: 1,13,23</li>
  <li>january: 4,14,24</li>
  </ul>
  <p>=>cost: 10999/- pp</p>
  <h4>2.HIMALAYAS BASECAMP</h4>
  <p>12DAYS/11NIGHTS</p>
  <ul>
  <li>november: 3,11,23</li>
  <li>december: 1,13,23</li>
  <li>january: 4,14,24</li>
  </ul>
  <p>=>cost: 12999/- pp</p>
  <h4>3.HAMPTA-PASS TREK</h4>
  <p>10DAYS/11NIGHTS</p>
  <ul>
  <li>november: 3,11,23</li>
  <li>december: 1,13,23</li>
  <li>january: 4,14,24</li>
  <p>=>cost: 9999/- pp</p>
  </ul>

  <h3><b>NOTE: AVAILABLE ONLY FROM AHMEDABAD- AHMEDABAD</b></h3>
</body>

</html>