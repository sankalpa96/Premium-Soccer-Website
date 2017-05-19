<?php

	$user = $_GET["user"];

	$email = $_GET["email"];
	
	$pass = $_GET["pass"];
	
	$conpass= $_GET["conpass"];

	$bio = $_GET["bio"];
	
	if($pass===$conpass){
		include("connect.php");
		$query = "INSERT INTO `login`( `username`, `Password`, `email`, `bio`) VALUES ('$user','$pass','$email','$bio')";
		$result = mysqli_query($con,$query);
		if(!$result)
			die(mysqli_error());
		echo "<script>window.location.href='../cart/index.html';</script>" ;
		mysqli_close($con);

	}else
			echo "<script>alert('Password and Confirm Password does not match');window.location.href='sign.html';</script>";
		
		
	
		
?>