<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['lawid'])) {
	// write the query to check if this username and password exists in our database
	$u = $_POST['lawid'];
	
	$sql = " DELETE FROM lawyer WHERE  ID =$u";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_students.php");
	}
	else{
		echo "Insertion Failed";
		header("Location: add_student.php");
	}
	
}


?>