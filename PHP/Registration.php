<?php

 
	
$con = new mysqli("localhost","root","","ezbidder"); // the connection Object
	if ($con-> connect_error){ //check Connection
		die("Connection Failed." .$con-> connect_error );
	}	

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$confirmpwd = $_POST['confirmpwd'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$mobile = $_POST['mobile'];

$sql="INSERT INTO`registration`( `First Name`, `Last Name`, `Date of birth`, `Gender`, `E-mail`, `Password`, `Confirm Password`, `Address`, `City`, `State or Province`, `Country`, `Contact Number`)
                         VALUES ('$firstName','$lastName','$dob','$gender','$email','$pwd','$confirmpwd','$address','$city','$state','$country',$mobile)";
 
	 $con->query($sql);
	$con->close(); 

	require "index.php" 
?>
