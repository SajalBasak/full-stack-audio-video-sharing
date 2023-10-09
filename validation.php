<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration2');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT * FROM usertable WHERE name = '$name' AND password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	$_SESSION['username'] = $name;
	$cookie_name = $_POST['user'];
	setcookie('cookie_name', $cookie_name, time() + (86400 * 30)); //1 day
	header('location:home.php');
}
else {
	header('location:login.php');
}



?>