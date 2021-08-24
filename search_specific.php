<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
  
  <style>
    * {
		font-family:Arial, Helvetica, sans-serrif;
    }
  </style>
</head>


<?php
include "db_connect.php";
$enrollform = $_GET["Enrollment"];


//Search the database for a particular enrollment no.
echo "<h1>Cadet details with enrollment no. $enrollform </h1>";
$sql = "SELECT Enrollment,Name,Sex,Year,Attendance FROM cadet where Enrollment=$enrollform";
$result = $mysqli->query($sql);
?>

<div id="accordion">

<?php
while($row = $result->fetch_assoc()) {
    //echo " " . $row["Enrollment"]. " " . $row["Name"]. " " . $row["Sex"]." " . $row["Year"]." " . $row["Attendance"]." " . $row["DOB"]. "<br>";
	echo "<h3>$row[Enrollment]</h3>";
	echo "<div/><p>$row[Name]  $row[Sex]  $row[Year]  $row[Attendance] </p></div>";
	
}


?>

</div>