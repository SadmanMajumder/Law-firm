<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['fname']) && isset($_POST['opass']) && isset($_POST['npass'])) {
	// write the query to check if this username and password exists in our database
	$u = $_POST['fname'];
	$p = $_POST['opass'];
	$a = $_POST['npass'];
	$sql= "UPDATE admin SET Password='$a' WHERE ID='$u' AND Password= '$p' ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		
		header("Location: index.php");
		//echo "Password Changhed Successfully";
		
	}
	else{
		//echo "Insertion Failed";
		header("Location: wrongPchange.php");
	}
	
}


?>
