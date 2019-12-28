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
	<title>Photo Gallery</title>
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

  <pre>
  	
  	
  </pre>

 <div>

  	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="pusasella.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc"><p>Bashmati Rice</p></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="img_forest.jpg">
      <img src="1121darksteam.jpg
      " alt="Forest" width="600" height="400">
    </a>
    <div class="desc"><p>Pusasella Rice</p></div>
  </div>
</div>

</div>

<div>

<div class="responsive">


  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="pusasella2.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc"><p>Minicate Rice</p></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="sugandhasteam.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><p>Sugandhastream Rice</p></div>
  </div>
</div>

</div>

<div class="clearfix"></div>

<div style="padding:6px;">
  <p><b> Paul Rice Mill</b> was established in the year 1999 with the core motive of producing rice of finest quality and purity thereby serving our end user with unmatched taste and ensure a healthy life.</p>

</body>
</html>
<?php
}
?>




