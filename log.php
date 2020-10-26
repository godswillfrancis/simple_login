<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
</head>
<body>

	<center>
	<?php 
		//include'includes/error.php';
	?>
	
	<h5>Login Here!</h5>
		<form method="POST" action="">
			USERNAME: <input name="username" placeholder="Input Username">
			<p></p>
			PASSWORD: <input name="password" placeholder="Input Password">
			<p></p>
			<input name="login" value="LOGIN" type="submit">
		</form>
		<p>
			not Registered? <a href="reg.php">REGISTER HERE!</a>
		</p>
	</center>
</body>
</html>

<?php 
	include 'controller/data.php';
	
	if(isset($_POST['login'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];

		if(empty($user)|| empty($pass)){
			?><script>alert('please fill empty fields');</script><?php
		}
		else{
			//go to database and check user
			$sql_check = "SELECT * FROM users 
				WHERE username = '$user'
				AND
				password = '$pass'";
			$query_check = mysqli_query($conn, $sql_check);
			$num_rows = mysqli_num_rows($query_check);
			if($num_rows){
				$rel = mysqli_fetch_assoc($query_check);
				$user = $rel['username'];
				
				if($num_rows > 0){
					$_SESSION['username'] = $user;
					?><script>alert('login successful');</script><?php
					?><script><?php echo("location.href='../pages/dashboard.php';");?></script><?php
				}else{
					//echo"Donnot Exist";
					?><script>alert('user doesn't exist');</script><?php
				}
			
			}
			
		}
	}
?>