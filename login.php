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
	<?php
		include 'dbcon.php';
		if(isset($_POST['login'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email_search = " select * from registration where username='$username'";
		$query = mysqli_query($con,$email_search);
		$email_count = mysqli_num_rows($query);
			if($email_count){
			$email_pass = mysqli_fetch_assoc($query);
			$db_pass = $email_pass['password'];
			$pass_decode = password_verify($password,$db_pass);
		 	if($pass_decode){
		 	echo"login success";
		 	?>
		 	<script>
		 		location.replace("home.php");
		 	</script>
		 	<?php
			 }
			 else{
			 	?>
		 		<script>
		 			alert("incorect credentials");
		 		</script>
		 		<?php
		 }
		}
		}
	?>
	
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" id="login" class="input-group" >
				<input type="text" name="username" class="input-field" placeholder="User Id" required>
				<input type="password" name="password" class="input-field" placeholder="Enter Password" required>
				<input type="checkbox" class="check-box"><span>Remember Password</span>
				<button type="submit" name="login" class="submit-btn">Log In</button>

			</form>	
			<form  action="registration.php" id="register" class="input-group" method="POST">
				<input type="text" name="username" class="input-field" placeholder="UserName" required>
				<input type="text" name="email" class="input-field" placeholder="Email Id" required>
				<input type="number" name="phno" class="input-field" placeholder="Phone Number" required>
				<input type="date" name="dob" class="input-field" placeholder="Date Of Birth" required>
				<input type="text" name="address" class="input-field" placeholder="Address" required>
				<input type="password" name="password" id="v1" class="input-field" placeholder="Enter Password" required>
				<input type="password" name="cpassword" id="v2" class="input-field" placeholder="Confirm Password" required>
				
				<input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
				<button type="submit" name="register" class="submit-btn" >Register</button>
				
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