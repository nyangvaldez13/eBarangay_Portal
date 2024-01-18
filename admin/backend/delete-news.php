<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "News Table Connected!";
}

if(isset($_GET['id'])){
    $activityId = $_GET['id'];
    $sql = "DELETE FROM activity WHERE activity_id = $activityId";
    $activity = $conn->query($sql);
}

?>