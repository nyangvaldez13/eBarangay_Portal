<?php 
include '../indexDB.php';
include '../login/auth.php';


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
$address = $_POST['address'];
$status = 2;




$sql = "INSERT INTO financial_assistance_submission 
(request_id, firstname, lastname, age, sex, phone_no, email, address, status) VALUES
 ('$id', '$firstname', '$lastname', '$age', '$sex', '$phone_no', '$email', '$address', '$status')";
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