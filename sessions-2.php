<?php
session_start();
include 'includes/errors.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A short description of the web page purpose/ intent">
    <meta name="author" content="Your name 2021">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions <?php echo "Logged in as: ".$_SESSION['username'] ?> </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="css/styles.css" rel="stylesheet">

    <style>

h4{color:red;margin-top: 10vh;}
    
    </style>
</head>
<body>

<div class="container">
<div class="row">



<header><h1>PHP Sessions</h1>
<?php

//check if the session variable is set
if (isset($_SESSION['username'])){

  echo "<p>Session exists access allowed</p>";
  echo "The user is logged in as: ". $_SESSION['username'];
}

else{
  echo "<p>Session does not exists. Access denied.</p>";
  //return user to another web page and deny access.
 // header('Location:sessions.php');

}
?>
</header>
<a href="destroy-sessions.php">Destroy sessions</a>
<p><a href="sessions.php">Back to Sessions</a></p>
</div>
<footer class="footer mt-auto py-3 bg-light navbar-fixed-bottom text-center">
  <div class="container">
    <span class="text-muted">Sessions <?php echo "Logged in as: ".$_SESSION['username'] ?></span>
  </div>
</footer>
</div>





</body>
</html>