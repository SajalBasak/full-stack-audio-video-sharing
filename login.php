<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>STREAM | LogIn Corner</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind+Siliguri|Josefin+Sans|Roboto+Mono|Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	<style type="text/css">
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
	button
	{
		cursor: pointer;
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
			<!-- <li><a href="login.php" class="menu-item"><i class="fa fa-user-circle fa-lg"><p>LogIn | SignUp</p></i></a></li> -->
		</ul>
	</nav>
	<p class="p-1">For creating any post or uploading any video, getting logged into a account is a must.</p>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="registration.php" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="https://aboutme.google.com/u/0/?referer=gplus" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://bd.linkedin.com/" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="user" placeholder="Username" required/>
			<input type="email" name="email" placeholder="Email" required/>
			<input type="password" name="password" placeholder="Password" required/>
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="validation.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="https://aboutme.google.com/u/0/?referer=gplus" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://bd.linkedin.com/" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" name="user" placeholder="Username" required/>
			<input type="password" name="password" placeholder="Password" required/>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please Sign in with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
	<p class="p-1">Already have an account? Then Sign in. Else Sign up and join Stream.</p>

 <script src="myscripts.js"></script> 
</body>
</html>