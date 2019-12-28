<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style_main.css">



   <style>
	    body{
	    	background-image: url(bg.png);
	    	background-size:cover;
	    }
	    hr{
	    	background: white;	
	    }

		.contact-form{
			background:rgba(0,0,0, .6);
			color:white;
			margin-top: 30px;
      margin-bottom: 20px;
			padding: 20px;
			box-shadow: 0px 0px 10px 3px grey;
		}
   </style>


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

<div class="container contact-form">
	<h1>Contact Us</h1>
	<hr>
	<div class="row">
   
       <div class="col-md-6">
       	<address>Fulbarigate, KUET</address>
       	<p>Email:- avi.pal357@gmail.com</p>
       	<p>Phone:- 34563463434</p>
       </div>

       <form class="col-md-6" action="contact_connection.php">
       	
         <div class="form-group">
         	<label>Name</label>
         	<input type="text" class="form-control" name="name" required=>
         </div>

         <div class="form-group">
         	<label>Email</label>
         	<input type="email" class="form-control" name="email" required>
         </div>

         <div class="form-group">
         	<label>Massage</label>
         	<textarea  class="form-control" rows="7" name="message" required></textarea>
         </div>

         <div class="form-group">
         	<button class="btn btn-primary btn-block" onclick="myFunction()">Send</button>
         </div>

       </form>

    </div>

</div>
   <script>
function myFunction() {
  alert("Message Sent Sucessfully!");
}
</script>

</body>
</html>
