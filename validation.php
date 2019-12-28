<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$email = $_POST['email'];
$pass  = $_POST['password'];

$s = "select * from usertable where email ='$email' && password='$pass' " ;
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
     $_SESSION['email'] = $email;
     header('location:index.php');
}
else
{
     header('location:login.php');
}

?>