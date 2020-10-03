<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration Form</title>
	<link href="style.php"  rel="stylesheet" type="text/css">
	
</head>
<body> 
	
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
			<form action="validation.php" method="post" id="login" class="input-group">
				<input type="text" name="username" class="input-field" placeholder="User Id" required>
				<input type="password" name="password" class="input-field" placeholder="Enter Password" required>
				<input type="checkbox" class="check-box"><span>Remember Password</span>
				<button type="submit" name="login" class="submit-btn">Log In</button>

			</form>	
			<form  action="registration.php" id="register" class="input-group" method="post">
				<input type="text" name="username" class="input-field" placeholder="UserName" required>
				<input type="text" name="email" class="input-field" placeholder="Email Id" required>
				<input type="number" name="phno" class="input-field" placeholder="Phone Number" required>
				<input type="date" name="dob" class="input-field" placeholder="Date Of Birth" required>
				<input type="text" name="address" class="input-field" placeholder="Address" required>
				<input type="password" name="password" id="v1" class="input-field" placeholder="Enter Password" required>
				<input type="password" name="cpassword" id="v2" class="input-field" placeholder="Confirm Password" required>
				
				<input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
				<button type="submit" name="register" class="submit-btn" onclick="validatePass()">Register</button>
				
			</form>	
		</div>
	</div>
	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register")
		var z = document.getElementById("btn")
		function register(){
			x.style.left = "-400px"
			y.style.left = "50px"
			z.style.left = "110px"
		}
		function login(){
			x.style.left = "50px"
			y.style.left = "450px"
			z.style.left = "0px"
		}
	</script>
	
</body>
</html>