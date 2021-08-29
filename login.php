<?php

session_start();

include("DB/connection.php");
include("DB/functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//read from database
		$query = "select * from users where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: index.php");
					die;
				}
			}
		}

		echo "<p> <font color=white>Wrong username or password</font> </p>";
	} else {
		echo "<p> <font color=white>Wrong username or password</font> </p>";
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Fauna+One">
	<link rel="shortcut icon" type="image.png" href="guitar-gallery/guitar2.jpg">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<title>Login</title>
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
			font-family: Cinzel, serif;
		}

		#button:hover {
			transform: scale(1.1);
		}

		#box {
			background-image: linear-gradient(to right, #8BA0F8, #79B5D9, #93F0EA);
			border-radius: 10px;
			margin: auto;
			width: 300px;
			padding: 20px;
			border: 2px solid wheat;
			box-shadow: 1px 1px 0px 0px gray;
			font-family: Cinzel, serif;



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

		<form method="post">
			<div style="font-size: 30px;margin: 5px;color: white;">Login</div>

			<input id="text" type="text" name="user_name" require>Name<br><br>
			<input id="text" type="password" name="password" require>Password<br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Signup</a><br><br>
		</form>
	</div>
</body>

</html>