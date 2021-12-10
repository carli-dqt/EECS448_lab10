<?php
$delete=$_POST["delete"];

$mysqli =new mysqli("mysql.eecs.ku.edu", "c491q003", "aex7aeJu", "c491q003");
$result = $mysqli->query($query);


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if(count($delete) == 0){
    echo "No posts were selected, nothing will be deleted";
}else{
    echo "The following posts have been deleted:";
    echo"<br>";
    for($i = 0; $i < count($delete); $i++){
    
        $sql="DELETE FROM Posts WHERE post_id='". $delete[$i]."'";
        if($result = $mysqli->query($sql)){
            echo "Post ID: " . $delete[$i] . "<br>";
        }
            
    }
}
$mysqli->close();

?>