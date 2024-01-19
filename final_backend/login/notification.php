<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebarangay_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_SESSION['id'];


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
                $design = 'style = "color:#5edb86;"';
            } else {
                $wait = 'Pending';
                $design = 'style = "color:#f2b46d;"';
            }

            


            // Add each notification as an associative array to $notifications
            $notifications[] = [
                'design' => $design,
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


        <div class="notification-inside" style="box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); cursor: pointer; padding:10px;">
        <a href="your-link-url" style="text-decoration: none; color: inherit;">
            <h6 class="label">' . $notification['tableLabel'] . '</h6>
            <div class="time">' . $notification['time'] . '</div>
            <div class="wait" '. $notification['design'] .'>' . $notification['wait'] . '</div>
            <div class="name">' . $notification['name'] . '</div>
        </a>
    </div>
    
        ';
        $notificationCounter++;
    }
}
?>

