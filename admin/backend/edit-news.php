<?php
include('db.php');
sleep(2);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['id'])) {
        echo "test sad";
        $id = (int)$_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $activity = $_POST['type'];
        $date = $_POST['date'];
        $time = "";
        $location = $_POST['location'];
        $media = $_POST['image'];
        $desc = "";

        // Check if a new image file is uploaded
        if (isset($_FILES['media']) && !empty($_FILES['media']['tmp_name'])) {
            $photoData = file_get_contents($_FILES["media"]["tmp_name"]);

            $check = getimagesize($_FILES["media"]["tmp_name"]);
            if ($check === false) {
                echo "File is not an image.";
                exit();
            }

            $allowedFormats = array("jpg", "jpeg", "png");
            $imageFileType = strtolower(pathinfo($_FILES["media"]["name"], PATHINFO_EXTENSION));
            if (!in_array($imageFileType, $allowedFormats)) {
                echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
                exit();
            }

            $sql = "UPDATE activity SET activity = ?, title = ?, date = ?, time = ?, place = ?, image = ?, description = ? WHERE activity_id = $id";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssss", $activity, $title, $date, $time, $location, $media, $description);
            if ($stmt->execute()) {
                echo "Record updated successfully";
                header('location: ../views/edit-admin.php?id=' . $id);
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $stmt->close();
        } else {
            $sql = "UPDATE activity SET activity = '$activity', title = '$title', date = '$date', time = '$time', place = '$location', image = '$media', description = '$description' WHERE activity_id = $id";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
                header('location: ../views/edit-news.php?id=' . $id);
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }
}