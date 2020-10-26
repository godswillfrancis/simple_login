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
	include'includes/error.php';
	?>
	<h5>Register Here!</h5>
		<form method="POST" action="controller/register_control.php">
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
			Are you aleady registered? <a href="login.php">LOGIN HERE!</a>
		</p>
	</center>
</body>
</html>