<?php
include 'db.php';

if ($dbConnect){
    $console_message = "Admin Connected to Barangay Officials.";
}

$sql = "SELECT * FROM brgy_officials";
$brgyPerson = $conn->query($sql);




?>