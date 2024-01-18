<?php 



$table = 'activity';
$sql = "SELECT * FROM $table ORDER BY date DESC LIMIT 6";
$events = $conn->query($sql);





?>