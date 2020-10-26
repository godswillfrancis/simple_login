<?php
	define('USER', 'root');
	define('PASS', '');
	define('HOST', 'localhost');
	define('DB', 'godswill');
	
	$conn = mysqli_connect(HOST, USER, PASS, DB);
	if($conn){
		//echo"Connected";
		
	}else{
		echo"Not Connected";
		
	}
?>