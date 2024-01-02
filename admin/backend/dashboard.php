<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "Dashboard Connected to Database.";
}


// Query to get counts for residents and admins.
$sql = "SELECT COUNT(CASE WHEN access_level = 2 THEN 1 END) AS residentCount,
COUNT(CASE WHEN access_level = 1 THEN 1 END) AS adminCount FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $row = $result->fetch_assoc();
   $residentCount = $row['residentCount'];
   $adminCount = $row['adminCount'];

} else {
    echo "No data found";
}


// count pending requests
$tables = array("brgy_cert_submission", "burial_assistance_submission", "business_permit_submission", "financial_assistance_submission", "medical_assistance_submission", "senior_citizen_application");
$totalCount = 0;

foreach($tables as $table){
    $sql = "SELECT COUNT(*) AS count FROM $table WHERE status = 2";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $count = $row['count'];
        $totalCount += $count;
    } else {
        echo "No record to be count.";
    }
}

$sql = "SELECT * FROM brgy_officials";
$brgyPerson = $conn->query($sql);


$conn->close();
?>


