<?php 
include 'db.php';

$tables = array(
    "brgy_cert_submission" => "Barangay Submission",
    "burial_assistance_submission" => "Burial Assistance",
    "business_permit_submission" => "Business Permit",
    "financial_assistance_submission" => "Financial Assistance",
    "medical_assistance_submission" => "Medical Assistance",
    "senior_citizen_application" => "Senior Citizen Application"
);

$notifications = [];

$notifications_user = [];

foreach ($tables as $table => $tableLabel) {
    $sql = "SELECT *, users.* 
            FROM $table 
            LEFT JOIN users ON $table.request_id = users.id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $time = timeAgo($row['request_date']);
            $name = $row['firstname'] . ' ' . $row['lastname'];
            $status = $row['status'];
            if ($status == 1){
                $icon = 'bi bi-check-circle text-success';
            } else {
                $icon = 'bi bi-exclamation-circle text-warning';
            }

            // Add each notification as an associative array to $notifications
            $notifications[] = [
                'time' => $time,
                'tableLabel' => $tableLabel,
                'name' => $name,
                'icon' => $icon,
                'request_date' => $row['request_date'] // Storing request_date for sorting
            ];
        }
    } else {
        // No records found for this table
        echo "No record found.";  // Commented to avoid displaying this multiple times
    }
}

// Sort the notifications array by request_date using array_multisort
usort($notifications, function($a, $b) {
    return strtotime($b['request_date']) - strtotime($a['request_date']);
});

// print_r($notifications);

// Iterate through the sorted notifications to build the HTML
$notificationsHTML = '';
$notificationCounter = 0;

foreach ($notifications as $notification) {
    if ($notificationCounter < 10) {
        $notificationsHTML .= '
            <li class="notification-item">
                <i class="'. $notification['icon'] .'"></i>
                <div>
                    <h4>' . $notification['tableLabel'] . '</h4>
                    <p>' . $notification['time'] . '</p>
                    <!-- Access user-related data -->
                    <p>Requested by: ' . $notification['name'] . '</p>
                </div>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
        ';
        $notificationCounter++;
    }
}
?>