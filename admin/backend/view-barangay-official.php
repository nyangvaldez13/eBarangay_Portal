<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "view-barangay-official Table Connected!";
}


if(isset($_GET['id'])){
    $officialsId = $_GET['id'];
    $sql = "SELECT * FROM brgy_officials WHERE id = $officialsId";
    $result = $conn->query($sql);
}

?>