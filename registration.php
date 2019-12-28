<?php
session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$name = $_POST['name'];
$email = $_POST['email'];
$pass  = $_POST['password'];

$s = "select * from usertable where email ='$email' ";
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo"E-mail already exists";
}
else
{
	$reg="insert into usertable(name,email,password)values('$name','$email','$pass')";
	mysqli_query($con,$reg);
	echo" Registration Sucessfull";
}




?>