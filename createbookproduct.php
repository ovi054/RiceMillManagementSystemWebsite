<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'bookproduct');

$sql = "CREATE TABLE bookproducttable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
customer_name VARCHAR(30) NOT NULL,
rice_name VARCHAR(30) NOT NULL,
quantity INT(7) NOT NULL,
address VARCHAR(50) NOT NULL,
phone_no VARCHAR(50) NOT NULL, 
book_date TIMESTAMP
)";

if (mysqli_query($con, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

mysqli_close($con);
?>