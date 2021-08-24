<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
<header>
	<div class="logo">
		<img src="logo.png">
	</div>
	<h1>Add information of new cadet</h1>
<form class="form-horizontal" action="add_cadet.php">

<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nwenroll">Enter new Enrollment no.</label>  
  <div class="col-md-5">
  <input id="nwenroll" name="nwenroll" type="text" placeholder="e.g. 608070" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nwname">Enter new name</label>  
  <div class="col-md-5">
  <input id="nwname" name="nwname" type="text" placeholder="e.g. Shashank" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nwsex">Enter gender</label>  
  <div class="col-md-5">
  <input id="nwsex" name="nwsex" type="text" placeholder="e.g. M/F" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nwyear">Enter year in NCC</label>  
  <div class="col-md-5">
  <input id="nwyear" name="nwyear" type="text" placeholder="e.g. 2" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nwatten">Enter Attendance</label>  
  <div class="col-md-5">
  <input id="nwatten" name="nwatten" type="text" placeholder="e.g. 98" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nwsen">Enter the Enrollment of incharge</label>  
  <div class="col-md-5">
  <input id="nwsen" name="nwsen" type="text" placeholder="e.g. 607075 / 607076" class="form-control input-md">
    
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="nwdob">Enter Date of Birth</label>  
  <div class="col-md-5">
  <input id="nwdob" name="nwdob" type="text" placeholder="e.g. 1998-12-10" class="form-control input-md">
    
  </div>
</div>-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Add</button>
  </div>
</div>

</fieldset>
</form>

</header>
</body>
</html>