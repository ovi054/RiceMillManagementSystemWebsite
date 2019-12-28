<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:login.php');
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Book Product</title>
    <link rel="stylesheet" href="style_bookproduct.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
</head>
<body>
  <div id="main">
    <nav>
      <img src="psm2.PNG" width="200" height="80">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="bookproduct.php">Book Product</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
 
      </ul>
    </nav>
<div class="signup-form">
       <form class="" action="bookproduct_connection.php" method="post">
        <h2>Book Product:</h2>
        <input type="text" placeholder="Customer Name" name="customer_name" class="txtb" required><br>
        <input type="text" placeholder="Rice Name" name="rice_name" class="txtb" required><br>
        <input type="text" placeholder="Quantity Per 50 KG" name="quantity" class="txtb" required><br>
        <input type="text" placeholder="Details Adress" name="address" class="txtb" required><br>
        <input type="text" placeholder="Phone No." name="phone_no" class="txtb" required><br>
        <input type="submit" value="Submit" class="signup-btn">
        <a href="index.php">Go Back</a>
      </form>
    </div>
    <?php
            echo"Welcome ". $_SESSION['email'];
  ?>
</body>
</html>
<?php
}
?>

<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style_bookproduct.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  </head>
  <body>
    <div class="signup-form">
       <form class="" action="bookproduct_connection.php" method="post">
        <h2>Book Product:</h2>
        <input type="text" placeholder="Customer Name" name="customer_name" class="txtb" required><br>
        <input type="text" placeholder="Rice Name" name="rice_name" class="txtb" required><br>
        <input type="text" placeholder="Quantity Per 50 KG" name="quantity" class="txtb" required><br>
        <input type="text" placeholder="Details Adress" name="address" class="txtb" required><br>
        <input type="text" placeholder="Phone No." name="phone_no" class="txtb" required><br>
        <input type="submit" value="Submit" class="signup-btn">
        <a href="index.php">Go Back</a>
      </form>
    </div>
  </body>
</html>
 -->