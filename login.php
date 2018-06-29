<?php
	include('header.php')
?>

<script>
$().ready(function () {
// validate signup form on keyup and submit
    $("#form-validation").validate({
        rules: {
usernamename: "required",
				
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 8
				},
				confirmpassword: {
					required: true,
					minlength: 8,
					equalTo: "#pass1"
				},
				mobile: {
					required: true,
                                        minlength: 10,
                                        maxlength: 13
				},
                                email: {
					required: true,
                                        email: true
				},
                                addrs: {
					required: true,
                                        minlength: 4
				},
				dob: {
					required: true,
					minlength: 2
				},
                                
				agree: "required"

        }
    });
});



</script>


<!-- login -->
		<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">SIGNUP</div>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="after_login.php" method="POST" id="form-validation">
					  <input type="email" name="username" id="username" placeholder="Email" required=" " class="form-control">
                                          <input type="password" name="password" id="password" placeholder="Password" required=" " class="form-control">
					  <input type="submit" value="Login" class="form-control" >
					</form>
				  </div>
				  <div class="form">
					<h2>Create an account</h2>
					
					<form action="after_reg.php" method="post" name="signup">
                                            <input type="text" name="username" id="username" placeholder="Username" required=" " class="form-control">
					 
                                            <input  type="email" name="email" id="email" placeholder="Email Address" required=" " class="form-control">
                                            <input type="text" name="mobile" id="mobile" placeholder="Phone Number" required=" " class="form-control">
                                            <input name="dob" id="dob" placeholder="BirthDay" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
					 	
                                            <input type="text" name="addrs" id="addrs" placeholder="Address" required=" " class="form-control">
                                            <input type="password" name="password" id="password" placeholder="Password" required=" " class="form-control">
                                            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required=" " class="form-control">
					  <input type="submit" value="Register" class="form-control">
					</form>
				  </div>
				  <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>


		<?php
			include('footer.php')
		?>	