<?php 

include 'db.php';

if ($dbConnect){
    $console_message = "Residents Table Connected!";
}



$sql = "SELECT * FROM users WHERE access_level = 2";
$result = $conn->query($sql);


?>