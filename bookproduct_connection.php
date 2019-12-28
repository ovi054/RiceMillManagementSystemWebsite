<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'bookproduct');

$customer_name = $_POST['customer_name'];
$rice_name = $_POST['rice_name'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
$phone_no  = $_POST['phone_no'];

$reg="insert into bookproducttable(customer_name,rice_name,quantity,address,phone_no)values('$customer_name','$rice_name','$quantity','$address','$phone_no')";
	mysqli_query($con,$reg);
	echo" Booking Sucessful,An admin will contact you.\n";
	echo '<a href="index.php">Go to Home</a>';
	



?>