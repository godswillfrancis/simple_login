<?php
	define('USER', 'root');
	define('PASS', '');
	define('HOST', 'localhost');
	define('DB', 'idy');
	
	$conn = mysqli_connect(HOST, USER, PASS, DB);
	if($conn){
		//echo"Connected";
		
	}else{
		echo"Not Connected";
		
	}
?>