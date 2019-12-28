<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'bookproduct');

$sql = "CREATE TABLE contacttable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
message VARCHAR(500) NOT NULL, 
msg_date TIMESTAMP
)";

if (mysqli_query($con, $sql)) {
    echo "Table Contacts created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

mysqli_close($con);
?>