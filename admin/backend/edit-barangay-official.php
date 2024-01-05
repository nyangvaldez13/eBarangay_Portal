<?php
include('db.php');
sleep(2);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['id'])) {
        $id = (int)$_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $committee = $_POST['committee'];
        $position = $_POST['position'];

        // Use prepared statements to prevent SQL injection
        $sql = "UPDATE brgy_officials SET firstname = ?, lastname = ?, committee = ?, position = ? WHERE id = $id";
        if($conn->query($sql) === TRUE){
            echo "Record Updated Successfully";
            header('location: ../views/edit-barangay-official.php?id='. $id);
        } else {
            echo "Error updating record: " . $conn->error;
          }

    } else {
        echo "ID not set";
    }
} 

?>
