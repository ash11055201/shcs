 <?php
$server = "localhost";
$user = "root";
$password = "";
$db = "userregistration";

$con = mysqli_connect($server,$user,$password,$db);
if($con){
	?>
		<script>
			
		</script>
	<?php
}else{
	?>
		<script>
			alert("Connection UnSuccessful");
		</script>	
	<?php
}
?>