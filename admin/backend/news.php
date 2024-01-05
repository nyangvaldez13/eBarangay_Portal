<?php
include 'db.php';

if ($dbConnect){
    $console_message = "Admin Connected to Database.";
}

$sql = "SELECT * FROM activity";
$activities = $conn->query($sql);




?>