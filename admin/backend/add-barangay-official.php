<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST['firstname']) &&
        isset($_POST['lastname']) &&
        isset($_POST['committee']) &&
        isset($_POST['position']) &&
        isset($_FILES['photo'])  
    ) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $committee = $_POST['committee'];
        $position = $_POST['position'];
        
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

        $sql = "INSERT INTO brgy_officials (firstname, lastname, committee, position, photo)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $firstname, $lastname, $committee, $position, $photoData);

        if ($stmt->execute()) {
            echo "Record inserted successfully";
            header("Location: ../views/dashboard_admin.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    } else {
        echo "All fields are required";
    }

    $conn->close();
} 

?>
