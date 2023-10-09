<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>STREAM | About STREAM</title>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind+Siliguri|Josefin+Sans|Roboto+Mono|Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mali&display=swap" rel="stylesheet">
	<style type="text/css">
		body
		{
			margin: 0;
			padding: 0;
			text-align: center;
		}
		.input-group
		{
			width: 50%;
		}
		section
		{
			height: 200px;
		}
		a.up-a
		{
			font-size: 40px;
			color: #d6e5ff;
			display: block;
			text-decoration: none;
		}
		p.up-para
		{
			padding-top: 30px;
			font-size: 20px;
			color: white;
			display: block;
		}
		form
		{
			color: white;
			cursor: pointer;
		}
		input
		{
			height: 30px;
			font-size: 15px;
			cursor: pointer;
		}
		nav
{
	top: 0;
	left: 0;
	width: 100%;
	height: 100px;
	padding: 10px 100px;
	box-sizing: border-box;
	transition: .5s;
	background: #eae9e8;
}
/*nav.black
{
	background: #eae9e8;
	height: 80px;
	padding: 10px 50px;
}*/
nav .logo
{
	float: left;
}
nav .logo img
{
	height: 70px;
	transition: .5s;
}
/*nav.black .logo img
{
	height: 60px;
}*/
nav ul
{
	float: right;
	margin: 0;
	padding: 0;
	display: flex;
}
nav ul li
{
	list-style: none;
}
nav ul li a
{
	line-height: 80px;
	color: #000000;
	padding: 5px 20px;
	margin-left: 5px;
	transition: .5s;
}
p
{
	font-family: 'Josefin Sans', sans-serif;
	display: inline;
	padding-left: 8px;
}
h1
{
	font-family: 'Josefin Sans', sans-serif;
}
h2
{
	font-family: 'Mali', cursive;
	font-size: 30px;
}
/*nav.black ul li a
{
	line-height: 60px;
}*/
nav ul li a:hover
{
	/*background-color: #9fa09d*/
	background-color: #ffffff;
	/*border-radius: 50px;*/
}
	</style>
</head>
<body>
	<nav>
		<a href="index.php" class="logo">
			<img src="logo3.png">
		</a>
		<ul>
			<!--<li><a href="#" class="menu-item"><i class="fa fa-adjust fa-lg"></i></a></li>
			<li><a href="#" class="menu-item"><i class="fa fa-cog fa-lg"></i></a></li>-->
			<!-- <li><a href="#" class="menu-item"><i class="fa fa-info-circle fa-lg"><p>About STREAM</p></i></a></li> -->
			<li><a href="login.php" class="menu-item"><i class="fa fa-plus-square fa-lg"><p>Create | Upload Video</p></i></a></li>
			<!--<li><a href="#" class="menu-item"><i class="fa fa-bell fa-lg"></i></a></li>-->
			<li><a href="login.php" class="menu-item"><i class="fa fa-user-circle fa-lg"><p>LogIn | SignUp</p></i></a></li>
		</ul>
	</nav>
	<h1>About us</h1><hr><br><br><br><br><br><br>
	<h2>Stream is a video hosting type website. Users can upload videos and watch uploaded videos in this platform. For uploading or watching videos, being logged into a account is a must. User can also delete any video uploaded from own account.</h2>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>