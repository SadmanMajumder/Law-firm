<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['Cid']) && isset($_POST['plntff']) && isset($_POST['dfndnt']) && isset($_POST['fdt']) && isset($_POST['cdt']) && isset($_POST['crt'])&& isset($_POST['jname'])&& isset($_POST['fs'])&& isset($_POST['lname'])&& isset($_POST['fls'])) {
	// write the query to check if this username and password exists in our database
	$u = $_POST['Cid'];
	$p = $_POST['plntff'];
	$c = $_POST['dfndnt'];
	$a = $_POST['fdt'];
	$d = $_POST['cdt'];
	$n = $_POST['crt'];
	$o = $_POST['jname'];
	$q = $_POST['fs'];
	$l = $_POST['lname'];
	$z = $_POST['fls'];
	
	$dup=mysqli_query($conn,"select * from cases where ID='$u' ");
	if(mysqli_num_rows($dup)>0)
	{
		echo "Insertion failed, This ID already been used.";
	}
	else{
	$sql = " INSERT INTO cases VALUES( '$u', '$p', '$c', '$a', '$d', '$n', '$o', '$q', '$l', '$z') ";

	if(mysqli_query($conn,$sql))
	{
		echo"Insert Value";
		header("Location: show_cases.php");
	}
	else{
		echo"Not Insert";
	}
	
	}
}