<?php session_start();
include 'database.php';
$user = $_POST['username'];
$pass = $_POST['password'];

if(empty($user)|| empty($pass)){
	header('location: ../login.php?error=1');
}
else{
	//go to database and check user
	$sql_check = "SELECT * FROM users_ 
					WHERE username = '$user'
					AND
					password = '$pass'";
	$query_check = mysqli_query($conn, $sql_check);
	$num_rows = mysqli_num_rows($query_check);
	if($num_rows){
		$rel = mysqli_fetch_assoc($query_check);
		$user = $rel['username'];
		if($num_rows > 0){
			//echo"USer Exist";
			$_SESSION['in'] = 1;
			$_SESSION['username'] = $user;
			
			header('location: ../user.php?error=0');
		}else{
			//echo"Donnot Exist";
			header('location: ../login.php?error=2');
		}
	
	}
	
}

?>