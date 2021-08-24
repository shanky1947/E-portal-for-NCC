<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<header>
		<div class="main1">
	<?php
	//if ($mysqli->connect_errno) {
	//    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	//}

	include "db_connect.php";
	$user = $_GET["username"];
	$pass = $_GET["passwordinput"];

	//Search the database for a particular enrollment no.
	//echo "<h1>Cadet details with enrollment no. $enrollform </h1>";
	?>
	<div class="logo">
		<img src="logo.png">
	</div>
	
	<div class="cadet">
		<?php
		$result = $mysqli->query("SELECT * FROM cadet c,login l where $user=l.username and $pass=l.password and c.Enrollment5=$user");
			if ($result->num_rows > 0) {
				//echo "Rank- Cadet<br>";
				//echo "<br>Cadet's information-<br><hr>";
				while($row = $result->fetch_assoc()) {
				echo "Enrollment No.: " . $row["Enrollment5"]. "<br>Name: " . $row["Name"]. "<br>Gender: " . $row["Sex"]."<br>Year in NCC: " . $row["Year"]."<br>Attendance: " . $row["Attendance"]."%". "<br>";
				}
			$rank ="Rank-CADET";	
			$info="Cadet's information-";
			} 
		?>
	</div>
	
	<div class="ano">
		<?php
		$result = $mysqli->query("SELECT * FROM admin where $user=1234 and $pass=1234");
		if ($result->num_rows > 0) {
			$rank ="Rank-ANO";
			$info="My information-";
			//echo "<br>My information-<br><hr>";
			while($row = $result->fetch_assoc()) {
			echo "Faculty id: " . $row["Faculty id"]. ",<br>Name: " . $row["FN"]. " ". $row["MN"]." ". $row["LN"].",<br>DOB: " . $row["DOB"]. ",<br>Phone: " . $row["Phone"]. "<br>";}
			echo "<br><br>";
			echo "All Cadet's information-<br>";
			include "Search_all_details.php";
		} 
		?>
	</div>
	
	<div class="cqms">
		<?php
		$result = $mysqli->query("SELECT * FROM cqms where $user=607070 and $pass=607070");
		if ($result->num_rows > 0) {
			$rank ="Rank-CQMS";
			$info="My information-";
			while($row = $result->fetch_assoc()) {
			echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Enrollment: " . $row["Enrollment1"]. ",<br>Name: " . $row["Name"]. ", <br>Reg. No.: " . $row["Reg.No."].",<br>Year: " . $row["Year"].",<br>DOB: " . $row["DOB"]. ",<br>Attendance: " . $row["Attendance"]. "<br>";}
			echo "<br><br>";
			echo "All Cadet's information-<br>";
			include "Search_all_details.php";
		} 
		?>
	</div>

	<div class="lcpl">
		<?php
		$result = $mysqli->query("SELECT * FROM lcpl, login1 l where l.username=$user and l.password=$pass");
		if ($result->num_rows > 0) {
			$rank ="Rank-LCPL";
			$info="My information-";
			while($row = $result->fetch_assoc()) {
			echo "Enrollment: " . $row["Enrollment4"]. ", Name: " . $row["Name"]. ", Sex: " . $row["Sex"].", Attendance: " . $row["Attendance"]. ", Phone: " . $row["Phone"]."<br>";
			echo "<br>";
			}
			echo "<br>";
			echo "All Cadet's information-<hr>";
			include "search_all_others.php";
			echo "<br>";
			echo "Leave information--<hr>";
			include "lcpls.php";
		}
		?>
	</div>
	
	<div class="cpl">
		<?php
		$result = $mysqli->query("SELECT * FROM cpl,login2 l where l.username=$user and l.password=$pass");
		if ($result->num_rows > 0) {
			$rank ="Rank-CPL";
			$info="My information-";
			while($row = $result->fetch_assoc()) {
			echo "Enrollment: " . $row["Enrollment3"]. ", Name: " . $row["Name"]. ", Sex: " . $row["Sex"].", Attendance: " . $row["Attendance"]. ", Phone: " . $row["Phone"]."<br>";
			echo "<br>";
			}
			echo "<br>";
			echo "All Cadet's information-<hr>";
			include "search_all_others.php";
			echo "<br>";
			echo "Any issue--<hr>";
			include "cpls.php";
		}
		?>
	</div>
	
	<div class="sgt">
		<?php
		$result = $mysqli->query("SELECT * FROM sgt c,login3 l where l.username=$user and l.password=$pass");
		if ($result->num_rows > 0) {
			$rank ="Rank-SGT";
			$info="My information-";
			while($row = $result->fetch_assoc()) {
			echo "Enrollment: " . $row["Enrollment2"]. ", Name: " . $row["Name"]. ", Sex: " . $row["Sex"].", Attendance: " . $row["Attendance"]. ", Phone: " . $row["Phone"]."<br>";
			echo "<br>";
			}
			echo "<br>";
			echo "All Cadet's information-<hr>";
			include "search_all_others.php";
			echo "<br>";
			echo "Respective cadets have low attendance--<hr>";
			include "sgts.php";
		}
		?>
	</div>
	
	<div class="tit">
	<h1><?php echo $rank;?> </h1>
	<h2><?php echo $info;?> </h2>
	</div>

</div>
</header>
</body>
</html>

