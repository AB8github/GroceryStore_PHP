<?php 

include('connect.php');
$id=$_REQUEST['id'];
$name=$_REQUEST['username'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$dob=$_REQUEST['dob'];

$address=$_REQUEST['addrs'];




 
$sql="update user_data set name='$name',email='$email',mobile='$mobile',dob='$dob',addrs='$address' where id='$id'";


$res=mysqli_query($con,$sql);


if($res>=1)
{
	echo "<script> Your Details Update Successfully</script>";
	header("location:profile.php");
	
	}
else
{
	
	echo "<script> Opps..!! Try Again Later</script>";
	header("location:profile.php");
	}
?>