<?php
	// Create connection
	$mysqli = new mysqli("mysql.eecs.ku.edu", "c491q003", "aex7aeJu", "c491q003");
	// Check connection
	if ($mysqli->connect_error) {
	  die("Connection failed: " . $mysqli->connect_error);
	  exit();
	}

	$sql = "SELECT * FROM Users";

	if ($result = $mysqli->query($sql)) {
	  // output data of each row
	  echo "<table border='1' cellspacing='0' cellpadding='4'><tr>";
	  while($row = $result->fetch_assoc()) {
		echo "<td>" . $row["user_id"] . "</td><br>";
	  }
	  echo "</table>";
	} else {
	  echo "no user has been created yet<br>";
	}
	$result->free();
	$mysqli->close();
?>