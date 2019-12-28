<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$sql = "CREATE TABLE usertable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL UNIQUE ,
password VARCHAR(40) NOT NULL, 
reg_date TIMESTAMP
)";

if (mysqli_query($con, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

mysqli_close($con);
?>