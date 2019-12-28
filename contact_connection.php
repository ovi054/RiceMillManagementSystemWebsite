<?php
session_start();
header('location:contact.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'bookproduct');

$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];

$reg="insert into contacttable(name,email,message) values('$name','$email','$message')";
	mysqli_query($con,$reg);
	echo" Message Sent,An admin will contact you.\n";

?>