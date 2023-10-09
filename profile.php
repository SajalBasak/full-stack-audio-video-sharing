<?php

session_start();
$con = mysqli_connect('localhost','root','','userregistration2');

?>

<!DOCTYPE html>
<html>
<head>
	<title>STREAM | User profile</title>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind+Siliguri|Josefin+Sans|Roboto+Mono|Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mali|Rubik+Mono+One&display=swap" rel="stylesheet">
	<style type="text/css">
		body
		{
			margin: 0;
			padding: 0;
			background: #c9c5c5;
			text-align: center;
		}
		div
		{
			padding-top: 30px;
			color: #3a0606;
			font-size: 20px;
		}
		a.w-a
		{
			color: black;
			font-family: 'Mali', cursive;
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
		p.all-up
		{
			font-size: 30px;
			display: block;
		}
		a.w-a
		{
			color: black;
			font-family: 'Mali', cursive;
			text-decoration: none;
		}
		a.bold-pa
		{
			font-weight: bold;
			text-decoration: none;
			font-family: 'Josefin Sans', sans-serif;
		}
	</style>
</head>
<body>
	<nav>
		<a href="home.php" class="logo">
			<img src="logo3.png">
		</a>
		<ul>
			<!--<li><a href="#" class="menu-item"><i class="fa fa-adjust fa-lg"></i></a></li>
			<li><a href="#" class="menu-item"><i class="fa fa-cog fa-lg"></i></a></li>-->
			<li><a href="about.php" class="menu-item"><i class="fa fa-info-circle fa-lg"><p>About STREAM</p></i></a></li>
			<li><a href="create.php" class="menu-item"><i class="fa fa-plus-square fa-lg"><p>Create | Upload Video</p></i></a></li>
			<!--<li><a href="#" class="menu-item"><i class="fa fa-bell fa-lg"></i></a></li>-->
			<li><a href="profile.php" class="menu-item"><i class="fa fa-user-circle fa-lg"><p> <?php echo $_SESSION['username'] ?> </p></i></a></li>
			<li><a href="logout.php" class="menu-item">Logout</a></li>
		</ul>
	</nav>
<div>
	<p class="all-up">Manage your videos</p><hr>
<?php

$q = "SELECT * FROM videoup";
$query = mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($query))
{
	if($row['profile'] == $_SESSION['username'])
	{
		$id = $row['id'];
		$name1 = $row['name'];
	
		echo "<a class='w-a' href='watch.php?id=$id'>$name1</a><p></p><a class='bold-pa' href='delete.php?id=$id'> delete</a><br>";
	}
}

?>
</div>
</body>
</html>