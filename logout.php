<?php
// logout.php
session_start();

// Unset or destroy the session variable storing user ID
unset($_SESSION['userid']); // or session_destroy() if you want to destroy the entire session

// Redirect user to index.php
header('Location: index.php');
exit();
?>
