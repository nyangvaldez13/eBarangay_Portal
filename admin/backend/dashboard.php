<?php 
include 'db.php';

// Query to get counts for residents, admins, and files
$sql = "(SELECT 'Residents' AS category, COUNT(*) AS count FROM brgy_residents)
        UNION
        (SELECT 'Admins' AS category, COUNT(*) AS count FROM users WHERE access_level = 1)
        UNION
        (SELECT 'Files' AS category, COUNT(*) AS count FROM files)";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['category'] . " count: " . $row['count'] . "<br>";
    }
} else {
    echo "No data found";
}

$conn->close();
?>


