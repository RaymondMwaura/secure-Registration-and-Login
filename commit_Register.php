<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Persisted to Database</title>
</head>

<body>

<?php

require "connectDB.php";

//the variables from our HTML page

$fn = $_POST['fname'];
$ln = $_POST['lname'];
$email = $_POST['email'];
$telno = $_POST['telno'];
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];

$options = [
    'cost' => 11,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];

$entered_password = password_hash($pwd1, PASSWORD_BCRYPT, $options);

if($pwd1 == $pwd2){

$strQuery = "INSERT INTO users (fname,lname,email,telno,PASSWORD) VALUES ('$fn','$ln','$email','$telno','$entered_password')";

$result = mysqli_query($connection,$strQuery) or exit("Error in Query Execution attempt");

	if ($result){
		
		print 
		"<div class='alert alert-success' id='success-alert'>
		<strong>Success!</strong> User registered successfully.
		</div>";
    }
	
	else{
		
		print 
		"<div class='alert alert-danger fade in alert-dismissable'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<strong>Oops!</strong> No payments registered.
		</div>";
	}
	
	mysqli_close($connection);

}

?>

	<div class="pure-control-group">
	<a href="login.php" class="pure-button">You may now login into the system</a>
	</div>

	<script>

	$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
	});

	</script>
	
</body>
</html>