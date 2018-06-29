<?php 
session_start();
include('connect.php');

$email=$_REQUEST['username'];
$pass=md5($_REQUEST['password']);

$sql="select * from user_data where `email`='".$email."' AND `password`='".$pass."'";
$res=mysqli_query($con,$sql);
$data=mysqli_fetch_array($res);
if($data)
{
	$_SESSION['username']=$email;
	
	header("location:profile.php");
	
	}
else
{
	
	$_SESSION['username']="Wrong Login Details";
	header("location:login.php");
	
	}
?>