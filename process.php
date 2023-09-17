<?php
if (isset($_POST['trek1'])) {
    $op1 = $_POST['trek1'];
    setcookie('op1', $op1, time() + 3600);
} else {
    setcookie('op1');
}
if (isset($_POST['trek2'])) {
    $op2 = $_POST['trek2'];
    setcookie('op2', $op2, time() + 3600);
} else {
    setcookie('op2');
}
if (isset($_POST['trek3'])) {
    $op3 = $_POST['trek3'];
    setcookie('op3', $op3, time() + 3600);
} else {
    setcookie('op3');
}
if (isset($_POST['trek4'])) {
    $op4 = $_POST['trek4'];
    setcookie('op4', $op4, time() + 3600);
} else {
    setcookie('op4');
}
if (isset($_POST['trek5'])) {
    $op5 = $_POST['trek5'];
    setcookie('op5', $op5, time() + 3600);
} else {
    setcookie('op5');
}
// $uname = $_POST['uname'];
// $param = urlencode(base64_encode($uname));
echo "your choice is updated successfully.";
header('Location:main.php');
?>