
<?php
session_start();
?>
<?php

include 'connect.php';
$username=$_SESSION['username'];
$sql = "SELECT product_name, number, rent_from, rent_to FROM `cart` WHERE email_id='$username'";
$result = $mysqli->query($sql);
$mysqli->close();
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
<?php
// $conn = mysqli_connect("localhost", "root", "", "form");
// // Check connection
// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }
// $sql = "SELECT product_name, number, rent_from, rent_to FROM `cart`";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
// // output data of each row
// while($row = $result->fetch_assoc()) {
// echo "<tr><td>" . $row["product_name"]. "</td><td>" . $row["number"] . "</td><td>"
// . $row["rent_from"]. "</td></td>" .  $row["rent_to"]. "</td></tr>" ;
// }
// echo "</table>";
// } else { echo "0 results"; }
// $conn->close();
?>