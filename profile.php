<?php
session_start();
include('connect.php');
if(isset($_SESSION['user']))
{
$sql="select * from user_info where `email`='".$_SESSION['user']."' ";

$res= mysqli_query($con,$sql);
$data=mysqli_fetch_array($res);
if($data)
{

?>
<style>
body {
	background:#DFDFFF;
}
.wrapper {
	Width:100%;
	margin:0px;
	padding:0px;
}
.logo_name {
	width:450px;
	margin:auto;
	box-shadow: 0px 0px 2px 2px #FFF5EC;
	margin-top:20px;
	background:#FFFFFF;
}
a {
	text-decoration:none;
}
.wrapperr {
	width:450px;
	margin:auto;
	box-shadow: 0px 0px 2px 2px #FFF5EC;
	margin-top:30px;
	background:#FFFFFF;
}
.from_container {
	width:340;
	margin:auto;
	padding: 30px 0px 1px;
	margin-left:30px;
}
.frm {
	width:250px;
	height:35px;
	border:1px solid #CCC;
	border-radius:4px;
	margin:10px;
	padding-left:15px;
}
.frmm {
	width:100px;
	height:35px;
	border:1px solid rgb(233, 79, 49);
	border-radius:4px;
	margin:10px;
	color:black;
	background:#E47200;
	cursor:pointer;
	font-size:15px;
}
.frmm:hover {
	color:#FFF;
	cursor:pointer;
}
h1 {
	text-align:center;
	padding:10px 0px;
	color:black;
	text-shadow: 1px 1px #666;
}
span {
	padding-left:4px;
	color:#666;
}
</style>
<html>
<body>
<div class="logo_name">
  <h1>Welcome <span style="color:#E47200;"><?php echo $data['username'];?></span></h1>
</div>
<div><a href="logout.php">
  <input type="submit" value="Logout">
  
  </a></div>
  <div>
  <a href="editprofile.php?id=<?php echo $data['id'];?>"><input type="button" value="Edit Profile"/></a></div>
<div class="wrapperr">
  <div class="from_container">
    <table border="1">
    <tr>
    <td><img src="userpic/<?php echo $data['pic'];?>" height="150px" width="150px"></td>
    <td>
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="pic">
    <input type="submit" name="upload" value="Upload">
    </form>
    <?php
	if(isset($_POST['upload']))
	{
		$img=$_FILES['pic']['name'];
		$path='userpic/';
		
		$sql=mysqli_query($con,"update user_info set pic='$img' where `email`='".$_SESSION['user']."' ");
		if($sql>=1)
		{
			move_uploaded_file($_FILES['pic']['tmp_name'],$path.$img);
			echo "
			<script>
			window.location.href='profile.php';
			</script>
			";
			
		}
	}
	?>
    </td></tr>
      <tr>
        <td style="color:#666;">Name:</td>
        <td><?php echo $data['username'];?></td>
      </tr>
      <tr>
        <td style="color:#666;">Email:</td>
        <td><?php echo $data['email'];?></td>
      </tr>
      <tr>
        <td style="color:#666;">Mobile:</td>
        <td><?php echo $data['mobile'];?></td>
      </tr>
      <tr>
        <td style="color:#666;">Address:</td>
        <td><?php echo $data['addrs'];?></td>
      </tr>
     
    </table>
  </div>
</div>
</body>
</html>
<?php
}
}
else
{
header("location:index.php");

}
?>
