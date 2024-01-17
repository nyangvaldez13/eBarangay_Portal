<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST['title']) &&
        isset($_POST['description']) &&
        isset($_POST['type']) &&
        isset($_POST['date']) &&
        isset($_POST['location']) &&
        isset($_FILES['photo'])   
    ) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $type = $_POST['type'];
        $date = $_POST['date'];
        $location = $_POST['location'];
        //$media = $_POST['photo'];
        
        $photoData = file_get_contents($_FILES["photo"]["tmp_name"]);

        $check = getimagesize($_FILES["photo"]["tmp_name"]);
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

        $sql = "INSERT INTO activity (activity, title, date, place, image, description)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $type, $title, $date, $location, $photoData, $description) ;

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