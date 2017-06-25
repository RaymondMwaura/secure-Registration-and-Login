<?php

class register_form{
	
	public function register(){

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>Registration Form</title>
</head>

<body>

<h3>REGISTRATION FORM</h3>

<form action="commit_Register.php" method="post" name="user_register" target="_self" class="pure-form pure-form-aligned">

  <fieldset>
  
	<div class="pure-control-group">
    <label>First Name:</label>
    <input name="fname" type="text" size="50" maxlength="50" required/>
	</div>
  
	<div class="pure-control-group">
	<label>Last Name:</label>
    <input name="lname" type="text" size="50" maxlength="50" required/>
	</p>
  
	<div class="pure-control-group">
    <label>Email:</label>
    <input name="email" type="email" size="50" maxlength="50" required/>
	</div>
  
	<div class="pure-control-group">
	<label>Telephone Number:</label>
    <input name="telno" type="text" size="50" maxlength="50" required/>
	</div>
  
	<div class="pure-control-group">
	<label>Password:</label>
    <input name="pwd1" type="password" size="50" maxlength="50" id="password" required/>
	</div>
	
	<div class="pure-control-group">
	<label>Confirm password:</label>
    <input name="pwd2" type="password" size="50" maxlength="50" id="confirm_password" required/>
	</div>
	
	<div class="pure-controls pure-button pure-button-primary">
	<input name="reset" type="reset" value="CLEAR" class="pure-button pure-button-primary"/>
	</div>
	
	<div class="pure-controls pure-button pure-button-primary">
	<input name="register" type="submit" value="REGISTER" class="pure-button pure-button-primary"/>
	</div>
	
	</fieldset>
	
</form>

	<div class="pure-control-group">
	<a href="login.php" class="pure-button">Already Registered? Login here</a>
	</div>

<script>

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity("");
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

</script>
	
</body>
</html>

<?php
}
}
?>