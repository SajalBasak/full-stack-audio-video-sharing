<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration2');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = "SELECT * FROM usertable WHERE name = '$name'";
$s1 = "SELECT * FROM usertable WHERE email = '$email'";

$result = mysqli_query($con, $s);
$result1 = mysqli_query($con, $s1);

$num = mysqli_num_rows($result);
$num1 = mysqli_num_rows($result1);

if($num)
{
	echo '<script type="text/JavaScript">  
    alert("Username already taken! Try again.."); 
    </script>';
}
else if($num1)
{
	echo '<script type="text/JavaScript">  
    alert("This email already has a id! Try again.."); 
    </script>';
}
else
{
	$reg = "INSERT INTO usertable(name , email , password) VALUES ('$name' , '$email' , '$pass')";
	mysqli_query($con, $reg);
	echo '<script type="text/JavaScript">  
    alert("Registration successful! Now please get yourself logged in."); 
    </script>';
}

?>