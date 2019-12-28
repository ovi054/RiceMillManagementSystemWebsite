<?php
session_start();
if(isset($_SESSION['email']))
{
  header('Location: index.php');
}
else
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  </head>
  <body>
    <div class="signup-form">
      <form class="" action="validation.php" method="post">
        <h1>LOGIN</h1>
        <input type="email" placeholder="Email" name="email" class="txtb">
        <input type="password" placeholder="Password" name="password" class="txtb">
        <input type="submit" value="Sign In" class="signup-btn">
        <a href="signup.php">No Account ? Create One</a>
      </form>
    </div>
  </body>
</html>
<?php
}
?>