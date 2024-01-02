<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "view-barangay-official Table Connected!";
}


if(isset($_GET['id'])){
    $residentId = $_GET['id'];
    $sql = "SELECT * FROM brgy_officials WHERE id = $residentId";
    $personInfo = $conn->query($sql);
    
    
}

?>