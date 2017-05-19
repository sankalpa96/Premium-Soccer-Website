<?php
	$email = $_GET["email"];
	
	$pass = $_GET["pass"];
	
	
	
		include("connect.php");
		$query =  "SELECT * FROM login WHERE username='$email' and Password='$pass'";

		$result = mysqli_query($con,$query);
		$count = mysqli_num_rows($result);

		if($count==1){
		
	}else{
		echo "<script>alert('Wrong Username or Password');window.location.href='index.html';</script>";
	}

		if(!$result)
			die(mysqli_error());
		
		echo "<script>window.location.href='../cart/index.html';</script>";
		mysqli_close($con);
		
	
		
?>