<?php 
include '../indexDB.php';
include '../login/auth.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
$address = $_POST['address'];
$purpose = $_POST['purpose'];
$status = '2';


// SQL query to insert data into the 'requests' table (replace 'requests' with your actual table name)
$sql = "INSERT INTO brgy_cert_submission (request_id, firstname, lastname, age, sex, phone_no, email, address, purpose, status) VALUES ('$id', '$first_name', '$last_name', '$age', '$sex', '$phone_no', '$email', '$address', '$purpose', '$status')";

$dataToSend = array('message' => 'Request Successfully Submitted!');


// Perform the query
if ($conn->query($sql) === TRUE) {
    header("Location:/final_views/request?header=1&type=1");
    echo json_encode($dataToSend);
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>