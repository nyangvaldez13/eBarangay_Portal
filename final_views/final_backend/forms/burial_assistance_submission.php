
<?php 
include '../indexDB.php';
include '../login/auth.php';

$deceased = $_POST['deceased'];
$age = $_POST['age'];
$birthday = $_POST['birthday'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$cause_of_death = $_POST['cause_of_death'];
$date_of_death = $_POST['date_of_death'];
$beneficiary = $_POST['beneficiary'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
$status = '2';



// SQL query to insert data into the 'requests' table (replace 'requests' with your actual table name)
$sql = "INSERT INTO burial_assistance_submission 
(request_id, deceased, age, birthday, sex, address, cause_of_death, date_of_death,beneficiary, phone_no, email, status)
 VALUES ('$id', '$deceased', '$age', '$birthday', '$sex', '$address', '$cause_of_death', '$date_of_death', '$beneficiary ', '$phone_no', '$email','$status')";

$dataToSend = array('message' => 'Request Successfully Submitted!');


// Perform the query
if ($conn->query($sql) === TRUE) {
    header("Location:/final_views/request?header=1&type=1");
    // echo json_encode($dataToSend);
    header('Content-Type: application/json');
    echo json_encode($dataToSend);
    exit();
} else {
    header('Content-Type: application/json');
    echo json_encode($data);
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>