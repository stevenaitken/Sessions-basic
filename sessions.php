<?php
//start a session
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

//set session variables
$_SESSION['username'] = "a user";

?>
</header>
<a href="sessions-2.php">Next page </a>

</div>
<footer class="footer mt-auto py-3 bg-light navbar-fixed-bottom text-center">
  <div class="container">
    <span class="text-muted">Sessions</span>
  </div>
</footer>
</div>





</body>
</html>