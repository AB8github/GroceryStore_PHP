<?php
include('connect.php');
$id=$_REQUEST['id'];
$sql="select * from user_info where `id`='$id' ";

$res= mysqli_query($con,$sql);
$data=mysqli_fetch_array($res);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
</head>

<body>
<div class="wrapper">
  <div class="logo_name">
    <h1>User Profile <span style="color:#E47200;">Edit</span></h1>
  </div>
  <div class="wrapperr">
    <div class="from_container">
      <form action="afteredit.php?id=<?php echo $data['id'];?>"  name="grocery" method="post"  >
        <table>
          <tr>
            <td style="color:#666;">Name:</td>
            <td><input type="text" name="username" placeholder="Enter Your Name Here" class="frm" value="<?php echo $data['username'];?>"/></td>
          </tr>
		  <tr>
            <td style="color:#666;">Email:</td>
            <td><input type="text" name="email" placeholder="Enter Your Email Here" class="frm" value="<?php echo $data['email'];?>"/></td>
          </tr>
		  <tr>
            <td style="color:#666;">Mobile:</td>
            <td><input type="text" name="mobile" placeholder="Enter Your Mobile No. Here" class="frm" value="<?php echo $data['mobile'];?>"/></td>
          </tr>
		   <tr>
            <td style="color:#666;">Address:</td>
            <td><textarea name="addrs" placeholder=" Enter Your Address Here" class="frm"><?php echo $data['addrs'];?></textarea></td>
          </tr>
         
		  
            
          
          <tr>
            <td></td>
            <td align="right">
						<input type="submit" name="submit"  value="Update" class="frmm"/></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  
</div>
<!--wrapper close-->
</body>
</html>
