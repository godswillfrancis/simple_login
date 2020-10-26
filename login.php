<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
</head>
<body>

	<center>
	<?php 
		include'includes/error.php';
	?>
	
	<h5>Login Here!</h5>
		<form method="POST" action="controller/login_contol.php">
			USERNAME: <input name="username" placeholder="Input Username">
			<p></p>
			PASSWORD: <input name="password" placeholder="Input Password">
			<p></p>
			<input name="login" value="LOGIN" type="submit">
		</form>
		<p>
			not Registered? <a href="register.php">REGISTER HERE!</a>
		</p>
	</center>
</body>
</html>