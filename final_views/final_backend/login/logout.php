<?php
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();



// Redirect to the login page or any other page after logout
header("Location: /");
exit();
?>
