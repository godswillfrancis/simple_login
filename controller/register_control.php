<?php
	//bring in database connection file here
	include 'database.php' ;
	
	//grab posted values from form
	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	//check if posted values are empty or not
	if(empty($username)|| empty($name) || empty($email) || empty($pass)){
		header('location: ../register.php?error=1');
	}
	//do other wise
	else{
		$sql = "INSERT INTO users_ (name, username, email, password) 
							 VALUES('$name', '$username', '$email', '$pass')";
		//check if sql has passed
		if($sql){
			//do the main query in the database
			$query = mysqli_query($conn, $sql);
			
			//check if query is successfull
			if($query){
				header('location: ../register.php?error=0');
				
			//do other wise in query 
			}else{
				header('location: ../register.php?error=2');
			}
		}else{
			header('location: ../register.php?error=3');
		}
	}
?>