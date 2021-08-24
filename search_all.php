<head>

  <style>
    * {
		font-family:Arial, Helvetica, sans-serrif;
    }
  </style>
</head>



<?php

$sql = "SELECT * FROM cadet";
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc()) {
    echo " " . $row["Enrollment"]. " " . $row["Name"]. " " . $row["Sex"]." " . $row["Year"]." " . $row["Attendance"]." " . $row["DOB"]. "<br>";
	//echo "<h3>$row[Enrollment]</h3>";
	//echo "<p>$row[Name]  $row[Sex]  $row[Year]  $row[Attendance]  $row[DOB]</p>";
	
}


?>