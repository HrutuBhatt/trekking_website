
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>Feedback!!</title>
    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open-Sans', sans-serif;
    letter-spacing: 0.6px;
    color: #fbfbfc;
}

body {
    min-height: 100vh;
    background-color: #21D4FD;
background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);

    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    background: linear-gradient(135deg, #474c62, #383c4d);
    border-radius: 12px;
    box-shadow: 4px 4px 25px rgba(0, 0, 0, 0.4);
    overflow: hidden;
}

.card-header,
.card-footer {
    background: linear-gradient(135deg, #3c4256, #313747);
    text-align: center;
    padding: 24px 32px;
}

.card-header {
    font-size: 1.8em;
    font-weight: bold;
}

.card-footer a {
    text-decoration: none;
    color: #d1d1d1;
}

.card-body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 32px 64px;
}

.stars {
    margin-bottom: 40px;
}

.stars i {
    font-size: 2.6em;
    margin: 8px;
    cursor: pointer;
    color: #292f3d;
    transition: color 0.5s;
}

.card.one .stars i:nth-child(-n+1) {
    color: #ffcf87;
}

.card.two .stars i:nth-child(-n+2) {
    color: #ffcf87;
}

.card.three .stars i:nth-child(-n+3) {
    color: #ffcf87;
}

.card.four .stars i:nth-child(-n+4) {
    color: #ffcf87;
}

.card.five .stars i:nth-child(-n+5) {
    color: #ffcf87;
}

textarea {
    width: 100%;
    background-color: #323747;
    border: none;
    border-radius: 8px;
    padding: 16px;
    resize: none;
    font-size: 1.4em;
    outline: none;
}

input.cta {
    width: 100%;
    cursor: pointer;
    outline: none;
    border: none;
    border-radius: 6px;
    padding: 16px;
    margin-top: 32px;
    background: #21d4fd;
    background-size: 300% 100%;
    font-size: 1.4em;
    transition: background-position 0.7s;
}

input.cta:hover {
    background-position: 100% 0;
    background-color:black;
    color:white:
}

.credit a{
    text-decoration: none;
    color: #21D4FD;
  }
.cta{
    width:60%;
}

    </style>
</head>
<body>
    <form method="post">
    <div class="card four">
        <div class="card-header">
            <p class="title">Reviews!!</p>
        </div>

        <div class="card-body">
            <div class="stars">
                <i class="fas fa-star" id="one"></i>
                <i class="fas fa-star" id="two"></i>
                <i class="fas fa-star" id="three"></i>
                <i class="fas fa-star" id="four"></i>
                <i class="fas fa-star" id="five"></i>
            </div>
            <textarea rows="10" placeholder="Tell us about your experience and share your views and next trips you want..." name="a"></textarea>
            <!-- <button class="cta" name="save">Provide feedback</button> -->
            <input class="cta" type="submit" value="Provide feedback" name="save"/><br>
        </div>

        <!-- <div class="card-footer">
            <a href="#">Maybe later</a>
        </div> -->
    </form>
    </div>
    <script>
        const stars = document.querySelectorAll('.stars i');
        const card = document.querySelector('.card');
        
        stars.forEach(function(star) {
            star.addEventListener('mouseover', function() {
                card.className = `card ${this.id}`
            })
        });
        
    </script>
   
</body>
</html>
<?php
$connect= new mysqli("localhost","root","","form") or die("ERROR:could not connect to the database!!!");
extract($_POST);
if(isset($save))
{
$msg="$a";

if($a!=''){
$query="INSERT INTO `review` VALUES('','$msg')";
$connect->query($query);
echo "Thanks for your feedback..";	
}
}


?>
<?php
// // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $link = new mysqli("localhost","root","","form");
// // $con->set_charset('utf8mb4');

// $result = $link->query("SELECT * FROM review ORDER BY id DESC LIMIT 5");
// // $sql = "SELECT name, email, number, trek, month , date FROM `user_info` WHERE email='$username'";
// // $result=mysqli_query($link,$sql);
// // Get all rows at once as an array of rows
// // $rows = $result->fetch_all();
// // print_r($rows);
// // or use foreach loop
// // foreach($rows as $row) {
// //     print_r($row);
// // }
// while($rows=$result->fetch_assoc())
// {
// 	echo $rows['feedback'];
//     echo "<br>";
// }
?>
<!-- </form> -->