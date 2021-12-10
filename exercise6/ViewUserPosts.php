<?php
	$userPicked = $_POST["users"];

	$mysqli = new mysqli("mysql.eecs.ku.edu", "c491q003", "aex7aeJu", "c491q003"));

	if ($mysqli->connect_errno) {
	 printf("Connect failed: %s\n", $mysqli->connect_error);
	 exit();
	}

	$sql="SELECT content FROM Posts WHERE author_id = '$userPicked'";
	if($result = $mysqli->query($sql)){
		echo "<table border='1' cellspacing='0' cellpadding='4'><tr>";
	  	while($row = $result->fetch_assoc()) {
			echo "<td>" . $row["content"] . "</td><br>";
	  	}
	  	echo "</table>";
		$result->free();
	}

	$mysqli->close();

?>