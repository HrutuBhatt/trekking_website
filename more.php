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
 .accordion {
  background-color: #d0f9fa;
  color: #181717;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: .3px solid blue;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #3556fc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
   
  </style>
  
    
</head>
<body>
    <div class="topnav">
        <a href="main.php" >Home</a>
        <a href="events.php">Events</a>
        <a href="contact.php">Contact</a>
        <a href="book.php">Book</a>
        <a href="profile.php">Profile</a>
        <a href="rent.php">Rent Gears</a>
        <a class="active" href="more.php">More Info</a>

    </div> 
    <h1>Inclusions And Exclusions:</h1>
    <button class="accordion">Inclusions And Exclusions</button>
<div class="panel">
  <div>
    <h3>Inclusions:</h3>
    <ul>
        <li>Food (Breakfast, Lunch & Dinner) at Campsite</li>
        <li>Accommodation in sharing Basis (Tent)</li>
        <li>Travelling as per your package</li>
        <li>Instructor & Guide</li>
        
    </ul>
    <h3>Exclusions:</h3>
    <ul>
        <li>Sight-Seeing Entry Fees if any</li>
        <li>Trekking equipments</li>
        <li>Anything not listed above</li>  
    </ul>

  </div>
</div>

<button class="accordion">Things to carry</button>
<div class="panel">
  <div>
    <h3>Personal Items</h3>
     <ul>
        <li>Woolen Hand Gloves</li>
        <li>Sun Cap & Sun Glasses</li>
        <li>Personal Sanitary Items</li>
        <li>2 Water Bottles, Snacks, Lunch Box, Mug & Spoon</li>
        <li>Plastic Bags/Pouch(for wet clothes)</li>
        <li>Personal Medication if any</li>
     </ul>
  </div>
</div>

<button class="accordion">Reporting place</button>
<div class="panel">
  <p>Ahmedabad : Ahmedabad Junction (Kalupur), Near Dena Bank ATM</p>
</div>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
    </script>

</body>

</html>