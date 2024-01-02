<?php 

session_start();



// Check if the user is not logged in
if (!isset($_SESSION['user'])) {
    // Redirect to the login page or any other page
    header("Location: /eBarangay_Portal");
    exit();
} else {
    $user = $_SESSION['user'];
}

// Proceed with the rest of your code for the protected page

?>