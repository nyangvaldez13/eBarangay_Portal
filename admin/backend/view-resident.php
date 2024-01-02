<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "View-Residents Table Connected!";
}


if(isset($_GET['residentId'])){
    $residentId = $_GET['residentId'];
    $sql = "SELECT $residentId AS id FROM users";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        $resident = $result->fetch_assoc();
    }
    
}

?>