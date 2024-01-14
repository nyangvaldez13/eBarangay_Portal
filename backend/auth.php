<?php



// Check if the user is logged in
if(isset($_SESSION['email']) && $_SESSION['access_level'] === 1) {
    // Redirect to another page (dashboard, home, etc.)
    header("Location: admin/views/dashboard_admin.php");
    exit;
} else if(isset($_SESSION['email']) && $_SESSION['access_level'] === 2){

    
    header("Location: ../user/_index.php");



      
      

    exit;
}

?>