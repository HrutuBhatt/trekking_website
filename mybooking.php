
<?php
session_start();
?>
<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'form'); 


$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$username=$_SESSION['username'];
$sql = "SELECT name, email, number, trek, month , date FROM `user_info` WHERE email='$username'";
$result=mysqli_query($link,$sql);
// $result = $mysqli->query($sql);
$link->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: .3px solid black;
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
		<h1>My Booking:</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Number</th>
				<th>Trek</th>
                <th>Month</th>
                <th>Date</th>
			</tr>
			
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['number'];?></td>
				<td><?php echo $rows['trek'];?></td>
                <td><?php echo $rows['month'];?></td>
                <td><?php echo $rows['date'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
<?php

?>