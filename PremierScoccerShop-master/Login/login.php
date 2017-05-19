<?php
	
	
	
	
		include("connect.php");
		
		$username = $_POST["email"];
	
		$password = $_POST["pass"];
		
		$selected = mysql_select_db("RegisterDB",$con)
		//$username = stripslashes($username);
	   // $password = stripslashes($password);
				$query = "SELECT * FROM userinfo WHERE username='$username' and Password='$password'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
	
	mysql_close();
	
	if($count==1){
		//$seconds = 5 + time();
		//setcookie(loggedin, date("F jS - g:i a"), $seconds);
		//header("location:login_success.php");
		echo "worked"
	}else{
		echo 'Incorrect Username or Password';
	}

?>