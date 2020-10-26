<!DOCTYPE html>
<html>
<head>
	<title>REGISTER PAGE</title>
</head>
<body>
	<style>
	.red{
		color: red;
	}
	.green{
		color: green;
	}
	</style>
	<center>
	<?php
	//include'includes/error.php';
	?>
	<h5>Register Here!</h5>
		<form method="POST" action="">
			USERNAME: <input name="username" placeholder="Input Username">
			<p></p>
			NAME: <input name="name" placeholder="Input Name">
			<p></p>
			EMAIL: <input name="email" placeholder="Input Emai">
			<p></p>
			PASSWORD: <input name="password" placeholder="Input Password">
			<p></p>
			<input name="reg" value="REGISTER" type="submit">
		</form>
		<p>
			Are you aleady registered? <a href="log.php">LOGIN HERE!</a>
		</p>
	</center>
</body>
</html>


<?php
	if(isset($_POST['reg'])){
		//bring in database connection file here
		include 'controller/data.php' ;
		
		//grab posted values from form
		
		$username = $_POST['username'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		
		//check if posted values are empty or not
		if(empty($username)|| empty($name) || empty($email) || empty($pass)){
			?><script>alert('fill empty fields');</script><?php
		}
		//do other wise
		else{
			$sql = "INSERT INTO users (username, name, email, password) 
					VALUES('$username', '$name', '$email', '$pass')";
			$query = mysqli_query($conn, $sql);
			//check if sql has passed
			if($query){
				?><script>alert('successfully registered');</script><?php
					
				//do other wise in query 
			}
			else{
				?><script>alert('Could not submit');</script><?php
			}
		}
	}
?>