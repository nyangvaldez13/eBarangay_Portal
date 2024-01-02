<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "Dashboard Table Connected!";
}

if(isset($_GET['residentId'])){
    $residentId = $_GET['residentId'];
    $sql = "DELETE FROM users WHERE id = $residentId";
    $result = $conn->query($sql);
    
}

?>