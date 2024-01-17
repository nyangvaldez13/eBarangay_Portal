<?php

session_start();


// Check if the user is logged in
if(isset($_SESSION['email']) && $_SESSION['access_level'] === 1) {
    // Redirect to another page (dashboard, home, etc.)
    
 
    header("Location: views/dashboard_admin.php");
    exit;
}

?>
