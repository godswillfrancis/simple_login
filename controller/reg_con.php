<?php
	//bring in database connection file here
	include 'data.php' ;
	
	//grab posted values from form
	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	//check if posted values are empty or not
	if(empty($username)|| empty($name) || empty($email) || empty($pass)){
		header('location: ../reg.php?fill empty fields');
	}
	//do other wise
	else{
		$sql = "INSERT INTO users (username, name, email, password) 
				VALUES('$username', '$name', '$email', '$pass')";
		$query = mysqli_query($conn, $sql);
		//check if sql has passed
		if($query){
			header('location: ../reg.php?Successfully registered');
				
			//do other wise in query 
		}
		else{
			header('location: ../reg.php?could not submit');
		}
	}
?>