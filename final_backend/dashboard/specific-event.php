<?php


if (isset($_GET['event-id'])) {
    $id = $_GET['event-id'];

    $table = 'activity';

    $sql = "SELECT * FROM $table WHERE activity_id = $id";
    $eventResult = $conn->query($sql);

    $sql = "SELECT * FROM $table ORDER BY RAND() LIMIT 3"; // Order by RAND() for random results
    $tableResult = $conn->query($sql);

    // Rest of your code...
}

?>