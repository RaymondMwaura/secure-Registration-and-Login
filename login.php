<?php

include "login_form.php";

require "connectDB.php";


if(isset($_POST["login"])){
	
	$email = $_POST["email"];
	$entered_password = $_POST["pwd1"];
	
	$strQuery = "SELECT password FROM users WHERE email = '$email' LIMIT 1";
	
	$result = mysqli_query($connection,$strQuery) or exit("Error in Query Execution attempt");
	
	if($result-> num_rows >0){
		
		$savedPassword = $result->fetch_assoc();
		
		$savedPassword = $savedPassword["password"];
	
	
	if (password_verify($entered_password, $savedPassword)) {
		
		//Here you can link to your members' views upon the user's successful login
    
			print 
		"<div class='alert alert-success' id='success-alert'>
		<strong>Success!</strong> User logged in successfully.
		</div>";
	
	} 
		else {
		
			print 
		"<div class='alert alert-danger fade in alert-dismissable'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<strong>Oops!</strong> Invalid username/password.
		</div>";
	}
				
	}
		else{
		
		    print 
		"<div class='alert alert-danger fade in alert-dismissable'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<strong>Oops!</strong> Invalid username/password.
		</div>";
	
	}
		
}

$loginObj = new login_form();

print $loginObj->login_Display();

?>