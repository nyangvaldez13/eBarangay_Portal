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
        $sql = "UPDATE brgy_officials SET firstname = ?, lastname = ?, committee = ?, position = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $firstname, $lastname, $committee, $position, $id);

        if ($stmt->execute()) {
            echo "Record Updated Successfully";
            // Redirect after ensuring no output before header
            header('location: ../views/edit-barangay-official.php?id=' . $id);
            exit(); // Ensure no further code execution after redirection
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "ID not set";
    }
} else {
    echo "Invalid request method";
}
?>
