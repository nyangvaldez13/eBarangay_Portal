<?php
include 'db.php';

if ($dbConnect){
    $console_message = "Admin Connected to Database.";
}

$sql = "SELECT * FROM users WHERE access_level = 1";
$admins = $conn->query($sql);




?>