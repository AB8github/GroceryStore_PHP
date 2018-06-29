<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost','root','', 'grocery');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//tow password are equal to each other

	if ($_POST['password'] == $_POST['confirmpassword']) {
		
		$username = $mysqli->real_escape_string($_POST['username']);
		$email = $mysqli->real_escape_string($_POST['email']);
		$mobile = $mysqli->real_escape_string($_POST['mobile']);
		$addrs = $mysqli->real_escape_string($_POST['addrs']);
		$password = md5($_POST['password']);

		$sql = "INSERT INTO user_info (username, email, mobile, addrs, password) values( '$username, $email', '$mobile', '$addrs', '$password')";

		if ($mysqli->query($sql) === true) {
			$_SESSION['message'] = 'Registration Succesful! $username';
			header('location: login.php');
			
		}


	}
}






?>



