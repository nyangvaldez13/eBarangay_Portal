<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "User Table Connected!";
}

if(isset($_GET['id'])){
    $personId = $_GET['id'];
    $sql = "DELETE FROM brgy_officials WHERE id = $personId";
    $result = $conn->query($sql);
}

?>