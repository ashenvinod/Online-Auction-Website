<?php
require 'contactusConfig.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO username (UserName,,Email,Phone,Message) VALUES ('$name','$email','$phone','$message')";

// if($con->query($sql)){
//   echo  "<script>alert('Product added successfully')</script>" ;
// }
// else{ echo "Error:" . $con->error;
// }
// $con->close();
?>