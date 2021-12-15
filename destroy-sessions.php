<?php
//start the session
session_start();
include 'includes/errors.php';

//frees all session variables currently registered
session_unset();
//Destroys all data registered to a session
session_destroy();
//redirect
header('Location:sessions-2.php');

//terminate the current script
die();
?>

