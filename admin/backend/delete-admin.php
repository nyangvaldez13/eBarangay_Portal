<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "User Table Connected!";
}

if(isset($_GET['id'])){
    $adminId = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $adminId";
    $result = $conn->query($sql);
}

?>