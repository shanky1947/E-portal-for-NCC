<head>

  <style>
    * {
		font-family:Arial, Helvetica, sans-serrif;
    }
  </style>
</head>

<?php

$result = $mysqli->query("select cadet.Enrollment5,cadet.Name,cadet.Attendance from cadet where Attendance<75");

while($row = $result->fetch_assoc()) {
    echo "Enrollment: " . $row["Enrollment5"]. ", Name: " . $row["Name"]. ", Attendance: " . $row["Attendance"]. "<br>";
	echo "<br>";
}
?>