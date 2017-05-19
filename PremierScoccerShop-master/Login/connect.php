<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"RegisterDB");
	if(!$con) 
		die("failed to connect mysqli : ".mysqli_connect_error());
	else
	;
?>