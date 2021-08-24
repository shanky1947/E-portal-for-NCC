<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<header>
		<div class="logo">
		<img src="logo.png">
	</div>
	<h2>Adding cadet details</h2>
	<div class="main2">
		<?php
		include "db_connect.php";
		$nwenroll= $_GET["nwenroll"];
		$nwname= $_GET["nwname"];
		$nwgender= $_GET["nwsex"];
		$nwyear= $_GET["nwyear"];
		$nwattendance= $_GET["nwatten"];
		$nwsen= $_GET["nwsen"];
		//$nwdob= $_GET["nwdob"];
		//Search the database for a particular enrollment no.
		//echo "<h1>Adding cadet details</h1>";

		$sql = "insert into cadet values('$nwname',$nwenroll,'$nwgender',$nwyear,$nwattendance,$nwsen)";
		$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

		include "search_all_details.php";

		?>
	</div>
</header>
</body>
</html>

<!--<a href="Search_all_details.php">Return to all details</a>-->