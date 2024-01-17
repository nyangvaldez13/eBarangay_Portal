<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "User Table Connected!";
}

if(isset($_GET['activity_id'])){
    $newsId = $_GET['activity_id'];
    $sql = "DELETE FROM activity WHERE activity_id = $newsId";
    $result = $conn->query($sql);
}

?>