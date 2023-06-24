<?php
$conn = new mysqli("localhost","root","","ezbidder"); // the connection Object
	if ($conn-> connect_error){ //check Connection
		die("Connection Failed." .$conn-> connect_error );
	}	
?>
