<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "View-activity Table Connected!";
}


if(isset($_GET['id'])){
    $activityId = $_GET['id'];
    $sql = "SELECT * FROM activity WHERE activity_id = $activityId";
    $activity = $conn->query($sql);
    
    if($activity->num_rows > 0){
        $activity = $activity->fetch_assoc();
    }
    
}

?>