<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<title>NCC E-portal</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="logo.png">
			</div>
			
		<div class="title">
			<h1>NCC E-portal</h1>
		<!--	<?php
			$text ='Click here';
			?>
		<a href="<?= $link ?>"> <?= $text ?></a> -->
		</div>

<?php

include "db_connect.php";

?>

<form class="form-horizontal" action="login.php">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>  
  <div class="col-md-5">
  <input id="username" name="username" type="text" placeholder="e.g. 608070" class="form-control input-md">
  <span style="color:white" class="help-block">Enter your Enrollment no.</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password </label>
  <div class="col-md-5">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="" class="form-control input-md">
    <span style="color:white" class="help-block">Enter your password</span>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="login"></label>
  <div class="col-md-8">
    <button id="login" name="login" class="btn btn-primary">Login</button>
    <button id="forgot" name="forgot" class="btn btn-danger">Forgot Password</button>
  </div>
</div>

</fieldset>
</form>



<?php
$mysqli->close();

?>


</div>
</header>
</body>
</html>

