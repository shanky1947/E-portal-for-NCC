<head>

  <style>
    * {
		font-family:Arial, Helvetica, sans-serrif;
    }
  </style>
</head>

<?php

$result = $mysqli->query("select * from leavee,lcpl where leavee.Enrollment4=lcpl.Enrollment4");

while($row = $result->fetch_assoc()) {
    echo "Leave_id: " . $row["Leave_id"]. "<br> Reason: " . $row["Reason"]. "<br> No. of days: " . $row["No. of days"]."<br> Applying date: " . $row["Applying date"]."<br> Status: " . $row["Status"]."<br> Applied to: " . $row["Enrollment4"]. "<br>";
	echo "<br>";
}
?>