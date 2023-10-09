<?php

session_start();
if(isset($_COOKIE['cookie_name']))
{
	header('location:home.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>STREAM | Home</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind+Siliguri|Josefin+Sans|Roboto+Mono|Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="st2.css">
	<style type="text/css">
		button
		{
			height: 50px;
			width: 200px;
			font-family: 'Josefin Sans', sans-serif;
			font-size: 25px;
			border-radius: 10px;
			cursor: pointer;
			background: #0a1045;
			color: white;
			transition: .5s;
		}
		button:hover
		{
			background: #7985ed;
			color: black;
			transition: .5s;
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
			<li><a href="about1.php" class="menu-item"><i class="fa fa-info-circle fa-lg"><p>About STREAM</p></i></a></li>
			<li><a href="login.php" class="menu-item"><i class="fa fa-plus-square fa-lg"><p>Create | Upload Video</p></i></a></li>
			<!--<li><a href="#" class="menu-item"><i class="fa fa-bell fa-lg"></i></a></li>-->
			<li><a href="login.php" class="menu-item"><i class="fa fa-user-circle fa-lg"><p>LogIn | SignUp</p></i></a></li>
		</ul>
	</nav>
	<section class="container">
		<section class="outer">

		</section>
	</section>
	<section class="videos">
		<h1 class="head-vid">Trending Videos</h1>
		<video width="1000px" height="600px" controls>
			<source src="GoogleAI.mp4" type="video/mp4">
			Not supported!
		</video>
		<h1>New Google AI Can Have Real Life Conversations With Strangers | Google</h1>
		<div class="vid-3">
			<video width="300px" height="200px" controls>
				<source src="TheLionKing.mp4" type="video/mp4">
			</video>
			<h1 class="left-h2">The Lion King Official Teaser Trailer | Walt Disney Studios</h1>
		</div>
		<div class="vid-3">
			<video width="300px" height="200px" controls>
				<source src="Stadia.mp4" type="video/mp4">
			</video>
			<h1 class="left-h1">Stadia Connect Official Recap In 3 Minutes | Google</h1>
		</div>
		<div class="vid-3">
			<video width="300px" height="200px" controls>
				<source src="NamChilona.mp4" type="video/mp4">
			</video>
			<h1 class="left-h1">Naam Chilona ( নাম ছিল না )Sung By Arnob | Arnob</h1>
		</div>
		<!-- <a class="more-button" href="login.php"><button>More</button></a> -->
		<div class="button-div">
			<a class="more-button" href="login.php"><button>Explore more</button></a>
		</div>
	</section>
	<!--<section class="audios">
		<h1>Audios you may like</h1>
		<audio width="100px" height="50px" controls>
			<source src="Bekhayali.mp3" type="audio/mp3">
		</audio>
	</section>-->
	<!-- <footer id="footer">
		
	</footer> -->
</body>
</html>