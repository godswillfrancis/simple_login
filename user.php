<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>USER PAGE</title>
</head>
<body>
		<center>
	<h5>Welcome <span style="color: red;">
	<?php if(isset($_SESSION['username'])){
		echo $_SESSION['username']; 
		}
		else{ echo"#";}; ?>!</span></h5>
	<p><img src="" width="200px" height="200px" alt="User Image"></p>
		Name<h4> users name</h4>
		Email<h4> users email</h4>
	</center>
</body>
</html>