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

        // Check if a new image file is uploaded
        if(isset($_FILES['photo']) && !empty($_FILES['photo']['tmp_name'])) {
            $photoData = file_get_contents($_FILES["photo"]["tmp_name"]);

            $check = getimagesize($_FILES["photo"]["tmp_name"]);
            if ($check === false) {
                echo "File is not an image.";
                exit();
            }

            $allowedFormats = array("jpg", "jpeg", "png");
            $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
            if (!in_array($imageFileType, $allowedFormats)) {
                echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
                exit();
            }

            $sql = "UPDATE brgy_officials SET firstname = ?, lastname = ?, committee = ?, position = ?, photo = ? WHERE id = $id";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssss", $firstname, $lastname, $committee, $position, $photoData);
            if ($stmt->execute()) {
                echo "Record updated successfully";
                header('location: ../views/edit-barangay-official.php?id='. $id);
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $stmt->close();
        } else {
            
            $sql = "UPDATE brgy_officials SET firstname = '$firstname', lastname = '$lastname', committee = '$committee', position = '$position' WHERE id = $id";
            if($conn->query($sql) === TRUE){
                echo "Record updated successfully";
                header('location: ../views/edit-barangay-official.php?id='. $id);
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }

    } else {
        echo "ID not set";
    }
} 
?>

