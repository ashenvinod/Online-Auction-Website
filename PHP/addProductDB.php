<?php
require 'addProductConfig.php';


$name = $_POST['productName'];
$img = $_POST['productImage'];
$desc = $_POST['description'];
$price = $_POST['startingPrice'];
$sdate = $_POST['startingDate'];
$edate = $_POST['endingDate'];

$sql = "INSERT INTO addproduct (Product_Name,Product_Image,Description,Starting_Price,Starting_Date,Ending_Date) VALUES ('$name','$img','$desc',$price,'$sdate','$edate')";

if($con->query($sql)){
  echo  "<script>alert('Product added successfully')</script>" ;
}
else{
  echo "Error:" . $con->error;
}
$con->close();
require 'myAuctions.php';
?>
