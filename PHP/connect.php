<?php
if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

   $conn = new mysqli('localhost','root','','test');
   if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : " .$conn->connect_error);
	} else {
     $stmt = $conn->prepare("insert into contact(Username, Email, Phone, Message) values(?,?,?,?)");
     $stmt->bind_param("ssis", $username, $email, $phone, $message);
     echo $execval;
     echo "Inquiry sent SUCCESSFULY...";
     $stmt->close();
     $conn->close();
   }

  }
  
?>