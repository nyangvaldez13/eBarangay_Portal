<?php 

include 'db.php';

if ($dbConnect){
    $console_message = "Residents Table Connected!";
}



$sql = "SELECT * FROM brgy_residents";
$result = $conn->query($sql);


?>