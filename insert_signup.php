<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['lid']) && isset($_POST['lname']) && isset($_POST['pstn']) && isset($_POST['expt'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['lid'];
	$p = $_POST['lname'];
	$c = $_POST['pstn'];
	$a = $_POST['expt'];

	
	$dup=mysqli_query($conn,"select * from signup where NID='$c' ");
	if(mysqli_num_rows($dup)>0)
	{
		echo "Insertion failed, This NID already been used.";
	}
	else{
	$sql = " INSERT INTO signup VALUES( '$u', '$p', '$c', '$a') ";

	if(mysqli_query($conn,$sql))
	{
		echo"Insert Value";
		header("Location: clientlogin.php");
	}
	else{
		echo"Not Insert";
	}
	
	}
}