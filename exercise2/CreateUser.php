<?php
$newUser = $_POST["newUser"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "c491q003", "aex7aeJu", "c491q003");

	if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
	}

if($newUser == ""){
	echo "This username is empty, try again<br>";
} else
	
	$query1 = "SELECT user_id FROM Users WHERE user_id = '$newUser' ";
	$result1=$mysqli->query($query1);

	if(mysqli_num_rows($result1) == 0){  //($result === true)
		$query2 = "INSERT INTO Users(user_id) VALUES('$newUser')";
		if($result2=$mysqli->query($query2)){
			echo "A new user has been created<br>";
		}
	} else { // ($result > 0)
		echo "This username is invalid, try again<br>";
	}
}

$result1->free();
$result2->free();
$mysqli->close();

?>
