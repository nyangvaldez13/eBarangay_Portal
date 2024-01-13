<?php 
include 'db.php';
include 'helpers.php';

session_start();
if (isset($_SESSION['id'])) {
   
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $access_level = $_SESSION['access_level'];
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    // echo "User ID: " . $id;
} else {
    echo "Session variable 'id' not set.";
}

$tables = array(
    "brgy_cert_submission" => "Barangay Submission",
    "burial_assistance_submission" => "Burial Assistance",
    "business_permit_submission" => "Business Permit",
    "financial_assistance_submission" => "Financial Assistance",
    "medical_assistance_submission" => "Medical Assistance",
    "senior_citizen_application" => "Senior Citizen Application"
);
$notifications = [];
foreach ($tables as $table => $tableLabel) {
    
    $sql = "SELECT *, users.* 
            FROM $table 
            LEFT JOIN users ON $table.request_id = users.id WHERE request_id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $time = timeAgo($row['request_date']);
            $name = $row['firstname'] . ' ' . $row['lastname'];
            $status = $row['status'];
            if ($status == 1){
                $wait = 'Approved';
            } else {
                $wait = 'Pending';
            }

            // Add each notification as an associative array to $notifications
            $notifications[] = [
            
                'time' => $time,
                'tableLabel' => $tableLabel,
                'name' => $name,
                'wait' => $wait,
                'request_date' => $row['request_date'] // Storing request_date for sorting
            ];
        }
    } else {
        // No records found for this table
        // echo "No record found.";   Commented to avoid displaying this multiple times
    }
}

// Sort the notifications array by request_date using array_multisort
usort($notifications, function($a, $b) {
    return strtotime($b['request_date']) - strtotime($a['request_date']);
});

// print_r($notifications);   <h4 style="color: gray;">' . $notification['tableLabel'] . '</h4>

// Iterate through the sorted notifications to build the HTML
$notificationsHTML = '';
$notificationCounter = 0;

foreach ($notifications as $notification) {
    if ($notificationCounter < 10) {
        $notificationsHTML .= '
            <li class="notification-item">
                <h4 class="label">' . $notification['tableLabel'] . '</h4>
                <div class="time">' . $notification['time'] . '</div>
                <div class="wait">' . $notification['wait'] . '</div>
                <div class="name">' . $notification['name'] . '</div>
            </li>
           
        ';
        $notificationCounter++;
    }
}
?>

