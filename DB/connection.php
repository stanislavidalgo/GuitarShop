<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "login_sample_db";

if (!$con = mysqli_connect($host, $user, $pass, $name)) {

	die("failed to connect!");
}
