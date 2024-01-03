<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "Session Connected to Database.";
}

$id =  $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);

?>