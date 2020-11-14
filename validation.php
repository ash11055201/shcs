<?php 
		include 'dbcon.php';
		// header('location:home.php');
		
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];

		$email_search = " select * from registration where username='$username' && password='$password' ";
		$query = mysqli_query($con,$email_search);
		$email_count = mysqli_num_rows($query);
		if($email_count == 1){
			print "Hello world!";
				header('location:home.php');
			}
			else{
				print "Hello world!";
				header('location:login.php');
			}
	?>