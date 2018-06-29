<?php 
include('connect.php');
$username=$_REQUEST['username'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$dob=$_REQUEST['dob'];
$address=$_REQUEST['addrs'];
$password=md5($_REQUEST['password']);
$confirmpassword=md5($_REQUEST['confirmpassword']);




 
$sql="insert into user_info (`username`,`email`,`mobile`,`dob`,`addrs`,`password`,`confirmpassword`) values('".$username."','".$email."','".$mobile."','".$dob."','".$address."','".$password."','".$confirmpassword."')";

$res=mysqli_query($con,$sql);
if($res>=1)
{
	echo "<script> Your Registration Successfully</script>";
	
	header("location:login.php");
	}
else
{
	
	echo "<script> Opps..!! Try Again Later</script>";
	header("location:login.php");
	}
?>