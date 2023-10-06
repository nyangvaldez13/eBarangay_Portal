<?php
// Start the session (if not already started)
session_start();

// Check if the user is signed in
if (!isset($_SESSION['user_signed_in']) || $_SESSION['user_signed_in'] !== true) {
    // If the user is not signed in, return a response indicating that
    echo 'not_signed_in';
} else {
    // User is signed in, return a response indicating that
    echo 'signed_in';
}
?>
