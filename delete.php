<?php

$con = mysqli_connect('localhost','root','','userregistration2');
$q = "DELETE FROM videoup WHERE id='$_GET[id]'";

if(mysqli_query($con,$q))
{
	header('location:profile.php');
}

?>