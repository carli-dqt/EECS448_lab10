<?php

$user = $_POST["user"];
$newPost = $_POST["newPost"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "c491q003", "aex7aeJu", "c491q003");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}



if($newPost == ""){
echo "The post is empty<br>";
} else {
	$query = "SELECT user_id FROM Users WHERE user_id='$user'";
	$result = $mysqli->query($query);

	if (mysqli_num_rows($result) > 0){
		$sql = "INSERT INTO Posts (content, author_id) VALUES ('$newUser','$author')";
			if ( $insert = $mysqli->query($sql) ) {
				echo "New post created successfully<br>";
			}

	}else{
		echo "This user does not exist, post was not created<br>";
	}


$result->free();
$insert->free();
$mysqli->close();


?>
