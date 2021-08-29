<?php
session_start();

include("DB/connection.php");
include("DB/functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//save to database
		$user_id = random_num(20);
		$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "<p> <font color=white>Please enter valid information</font> </p>";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Fauna+One">
	<link rel="shortcut icon" type="image.png" href="guitar-gallery/guitar2.jpg">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<title>Signup</title>
</head>

<body>

	<style type="text/css">
		#text {

			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin white;
			width: 100%;
		}

		#button {

			padding: 10px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border-radius: 10px;
			border: none;
			transition: 0.5s;
			cursor: pointer;
			font-size: 20px;
		}

		#button:hover {
			transform: scale(1.1);
		}

		#box {
			background-image: linear-gradient(to right, #8BA0F8, #79B5D9, #93F0EA);
			border-radius: 10px;
			margin: auto;
			width: 30vw;
			height: 50vh;
			padding: 20px;
			border: 2px solid wheat;
			box-shadow: 1px 1px 0px 0px gray;
			font-family: Cinzel, serif;

		}

		@media (max-width: 1400px) {
			#box {
				width: auto;
				height: auto;
			}

			/* #text {} */


		}

		body {
			background: rgb(77, 57, 57, 44) url(slide/slide2.jpg) no-repeat center;
			background-size: cover;
			height: 100vh;
			display: flex;

		}

		form {
			color: wheat;
			padding-right: 10px;



		}

		a {
			color: wheat;
			text-decoration: none;
			cursor: pointer;
			font-size: 25px;
			padding-top: 30px;


		}
	</style>

	<div id="box">
		<h1>Welcome to STRING </h1>
		<form method="post">
			<div style="font-size: 20px;margin: 0 0 5px 0;color: white;">Signup</div>

			<input id="text" type="text" name="user_name" require>Name<br><br>
			<input id="text" type="password" name="password" require>Password<br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>

</html>