<?php
// logout.php file
session_start();
session_destroy();
header("Location: login.html"); // Redirect the user to the login page
exit();
?>