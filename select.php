<?php 
session_start();
echo "<form action='process.php' method='post'><table>";
echo "<tr>";
echo "<td>";
echo "<b>Which adventure you like the most??<b> <br/>";
echo "</td>";
echo "<td>";
if (isset($_COOKIE['op1'])) {
    echo '<input type="checkbox" id="trek1" name="trek1" value="camping" checked>';
    echo '<label for="trek1">Camping</label><br/>';
} else {
    echo '<input type="checkbox" id="trek1" name="trek1" value="camping">';
    echo '<label for="trek1">Camping</label><br/>';
}
if (isset($_COOKIE['op2'])) {
    echo '<input type="checkbox" id="trek2" name="trek2" value="Hiking" checked>';
    echo '<label for="trek2">Hiking</label><br/>';
} else {
    echo '<input type="checkbox" id="trek2" name="trek2" value="Hiking">';
    echo '<label for="trek2">Hiking</label><br/>';
}
if (isset($_COOKIE['op3'])) {
    echo '<input type="checkbox" id="trek3" name="trek3" value="Rafting" checked>';
    echo '<label for="trek3">River-Rafting</label><br/>';
} else {
    echo '<input type="checkbox" id="trek3" name="trek3" value="Rafting">';
    echo '<label for="trek3">River-Rafting</label><br/>';
}
if (isset($_COOKIE['op4'])) {
    echo '<input type="checkbox" id="trek4" name="trek4" value="Bunjee" checked>';
    echo '<label for="trek4">Bunjee-jumping</label><br/>';
} else {
    echo '<input type="checkbox" id="trek4" name="trek4" value="Bunjee">';
    echo '<label for="trek4">Bunjee-jumping</label><br/>';
}
if (isset($_COOKIE['op5'])) {
    echo '<input type="checkbox" id="trek5" name="trek5" value="Rappelling" checked>';
    echo '<label for="trek5">Rappelling</label><br/>';
} else {
    echo '<input type="checkbox" id="trek5" name="trek5" value="Rappelling">';
    echo '<label for="trek5">Rappelling</label><br/>';
}
echo "</td>";
echo "<td><input type='submit' value='Save'/></td>";
echo "</tr>";
echo "</table></form>";
?>