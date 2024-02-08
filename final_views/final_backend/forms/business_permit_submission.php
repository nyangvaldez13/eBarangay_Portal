<?php 
include '../indexDB.php';
include '../login/auth.php';


$business = $_POST['businessName'];
$type = $_POST['businessType'];
$business_address = $_POST['businessAddress'];
$owner = $_POST['ownerName'];
$owner_address = $_POST['ownerAddress'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
$status = 2;



// SQL query to insert data into the 'requests' table (replace 'requests' with your actual table name)
$sql = "INSERT INTO business_permit_submission (request_id, business, type, business_address, owner, owner_address, phone_no, email, status) VALUES 
                                                ('$id', '$business', '$type', '$business_address', '$owner', '$owner_address', '$phone_no', '$email', '$status')";

$dataToSend = array('message' => 'Request Successfully Submitted!');


// Perform the query
if ($conn->query($sql) === TRUE) {
    header("Location:/final_views/request?header=1&type=1");
    echo json_encode($dataToSend);
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
     json_encode($dataToSend);
}

// Close the connection
$conn->close();
?>