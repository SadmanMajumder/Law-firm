<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['lid']) && isset($_POST['lname']) && isset($_POST['pstn']) && isset($_POST['expt']) && isset($_POST['slry']) && isset($_POST['ldr'])) {
	// write the query to check if this username and password exists in our database
	$u = $_POST['lid'];
	$p = $_POST['lname'];
	$c = $_POST['pstn'];
	$a = $_POST['expt'];
	$d = $_POST['slry'];
	$n = $_POST['ldr'];
	
	$dup=mysqli_query($conn,"select * from lawyer where ID='$u' ");
	if(mysqli_num_rows($dup)>0)
	{
		echo "Insertion failed, This ID already been used.";
	}
	else{
	$sql = " INSERT INTO lawyer VALUES( '$u', '$p', '$c', '$a', '$d', '$n' ) ";
	if(mysqli_query($conn,$sql))
	{
		echo"Insert Value";
		header("Location: show_students.php");
	}
	else{
		echo"Not Insert";
	}
	
	}
}