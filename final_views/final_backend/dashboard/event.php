<?php 



$table = 'activity';

$sqlThisWeek = "SELECT * FROM $table WHERE YEARWEEK(date) = YEARWEEK(NOW()) ORDER BY date";
$thisWeek = $conn->query($sqlThisWeek);

$sqlOngoing = "SELECT * FROM $table WHERE date >= CURDATE() ORDER BY date";
$ongoing = $conn->query($sqlOngoing);

$sqlAllEvents = "SELECT * FROM $table ORDER BY date DESC LIMIT 6";
$events = $conn->query($sqlAllEvents);

$sqlAllEvents = "SELECT * FROM $table ORDER BY date DESC ";
$featured = $conn->query($sqlAllEvents);


?>