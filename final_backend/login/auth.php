<?php 


session_start();



// Check if the user is not logged in
if (!isset($_SESSION['access_level'])) {
    // Redirect to the login page or any other page
    header("Location: /eBarangay_Portal");
    exit();
} else {
      
    $id =  $_SESSION['id'];
    $email = $_SESSION['email'];
    $access_level = $_SESSION['access_level'];
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
}


?>