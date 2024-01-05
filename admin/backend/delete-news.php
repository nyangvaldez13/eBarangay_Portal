<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "User Table Connected!";
}

if(isset($_GET['id'])){
    $newsId = $_GET['id'];
    $sql = "DELETE FROM activity WHERE id = $id";
    $result = $conn->query($sql);
}

?>