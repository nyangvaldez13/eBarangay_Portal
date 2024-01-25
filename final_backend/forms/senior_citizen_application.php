<?php 
include '../indexDB.php';
include '../login/auth.php';


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];

$status = 2;


if (isset($_FILES["file_upload"]) && $_FILES["file_upload"]["error"] == UPLOAD_ERR_OK) {
    // Define the directory to save uploaded files
    $uploadDir = '/assets/';
    echo 'in';
    // Create the directory if it doesn't exist
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Generate a unique file name to avoid overwriting existing files
    $fileName = uniqid('file_') . '_' . basename($_FILES["file_upload"]["name"]);
    $targetFilePath = $uploadDir . $fileName;

    // Move the uploaded file to the desired location
    if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $targetFilePath)) {
        // File upload success
        // Insert file details into the database
        $sql = "INSERT INTO senior_citizen_application 
        (request_id, firstname, lastname, age, birthday, brgy_cert, address, status) VALUES
        ('$id', '$firstname', '$lastname', '$age', '$birthday', '$fileName', '$address', '$status')";
        
   


        // Perform the query
        if ($conn->query($sql) === TRUE) {
            $dataToSend = array('message' => 'Request Successfully Submitted!');
            header("Location:/final_views/request?header=1&type=1file=$targetFilePath");
            echo json_encode($dataToSend);
            exit();
        } else {
            $dataToSend = array('message' => 'Request Error!');
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location:/final_views/request?header=1&type=2");
            json_encode($dataToSend);
            exit();
        }

            // Close the connection
            $conn->close();
        
      
    } else {
        echo "Error uploading the file.";
    }
} else {
    echo "No file uploaded or an error occurred during upload.";
}



?>


<?php 



?>