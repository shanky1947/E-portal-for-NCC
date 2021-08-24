<head>

  <style>
    * {
		font-family:Arial, Helvetica, sans-serrif;
    }
  </style>
</head>

<?php

$result = $mysqli->query("select * from any_issue,cpl where any_issue.Enrollment3=cpl.Enrollment3");

while($row = $result->fetch_assoc()) {
    echo "Issue_id: " . $row["Issue_id"]. "<br> Issue: " . $row["Issue"]. "<br> Request: " . $row["Request"]."<br>";
	echo "<br>";
}
?>