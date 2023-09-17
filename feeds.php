<?php
// $connect= new mysqli("localhost","root","","form") or die("ERROR:could not connect to the database!!!");
// extract($_POST);
// if(isset($save))
// {
// $msg="<pre>$a</pre>";


// $query="INSERT INTO `review` VALUES('','$msg')";
// $connect->query($query);
// echo "Thanks for your feedback..";	

// }

// if(isset($disp))
// {
// 	$query="SELECT * FROM `review`";
// 	$result=$connect->query($query);
// 	echo "<table border=1>";
// 	echo "<tr><th></th><th>Message</th></tr>";
// 	while($row=$result->fetch_array())
//     {
// 		echo "<tr>";
// 		echo "<td>Anonymous</td>";
// 		echo "<td>".$row['feedback']."</td>";
// 		echo "</tr>";
// 		}
// 	echo "</table>";	
// }
?>
<style>
input,textarea{width:250px}
textarea{height:200px}
input[type=submit]{width:150px}
</style>
<form method="post">
<table width="200">
  
 
 
  
  <tr>
    <td>Message</td>
    <td><textarea placeholder="contents"  name="a"></textarea></td>
  </tr>
  <tr>
    <td colspan="2">
    <input type="submit" value="Save" name="save"/>
		<input type="submit" value="Display" name="disp"/>
	</td>
  </tr>
  
</table>
</form>