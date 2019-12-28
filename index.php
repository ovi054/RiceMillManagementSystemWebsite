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
	<title>Home</title>
	<link rel="stylesheet" href="style_main.css">
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
  	<?php
            echo"Welcome ". $_SESSION['email'];
  ?>
  <p>
     <br> 
    </p>

<p><img src="paddy2.jpg" alt="Pineapple" style="width:500px;height:280px;margin-right:15px;">
 <b> Paul Rice Mill</b> was established in the year 1999 with the core motive of producing rice of finest quality and purity thereby serving our end user with unmatched taste and ensure a healthy life.<br><br>
We strongly believe that the quality starts from the farms itself. Our permanent relations with farmers and the suppliers help us keep a strict control over processes & manufacture rice of premium quality. Bangladesh is one of the world’s largest producers, as well as the leading consumer of rice. We feel proud to be in the business which helps us in contributing significantly in the growth of the nation’s economy and also sit at the heart of so many dinner tables. Uncompromised quality combined with a fair price and prompt delivery has etched our name in the market. Our widest range of rice includes all indian basmati and non basmati.</p>




</body>
</html>
<?php
}
?>