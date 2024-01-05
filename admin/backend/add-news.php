<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST['title']) &&
        isset($_POST['description']) &&
        isset($_POST['type']) &&
        isset($_POST['date']) &&
        isset($_FILES['location']) &&
        isset($_FILES['media'])   
    ) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $type = $_POST['type'];
        $date = $_POST['date'];
        $time = "";
        $location = $_POST['location'];
        $media = $_POST['media'];
        $desc = "";
        
        $photoData = file_get_contents($_FILES["media"]["tmp_name"]);

        $check = getimagesize($_FILES["media"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            exit();
        }

        $allowedFormats = array("jpg", "jpeg", "png", "gif");
        $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
        if (!in_array($imageFileType, $allowedFormats)) {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
            exit();
        }

        $sql = "INSERT INTO activity (activity, title, date, time, place, image, heading, description)
                VALUES (?, ?, ?, ?, ?), ?, ? ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $type, $title, $date, $time, $location, $photoData, $description, $desc),  ;

        if ($stmt->execute()) {
            echo "Record inserted successfully";
            header("Location: ../views/news.php");
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