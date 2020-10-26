<?php
if(isset($_GET['error'])){
		$error = $_GET['error'];
		if($error == "1"){
			echo"<h4 class=\"red\">Error! please fill out all fields</h4>";
			
		}elseif($error == "2"){
			echo"<h4 class=\"red\">Error! An Error Occured in DATABASE</h4>";
			
		}elseif($error == "3"){
			echo"<h4 class=\"red\">Error! An Error Occured in DATABASE, SQL error</h4>";
			
		}elseif($error == "0"){
			echo"<h4 class='green'>Success! Registration Successfull</h4>";
			
		}else{
			//echo"";
		}
	}else{
		//$error = "";
	}
	
?>