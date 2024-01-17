<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST['firstname']) &&
        isset($_POST['lastname']) &&
        isset($_POST['phone']) &&
        isset($_POST['email']) &&
        isset($_POST['user_password']) &&
        isset($_POST['address']) &&
        isset($_FILES['photo'])  
    ) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $user_password = $_POST['user_password'];
        $address = $_POST['address'];
        $access_level = 1;

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
      
        $sql = "INSERT INTO users (firstname, lastname, phone, email, user_password, address, access_level, photo)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

       
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssss", $firstname, $lastname, $phone, $email, $user_password, $address, $access_level, $photoData);

      
        if ($stmt->execute()) {
            echo "Record inserted successfully";
           
            header("Location: ../views/admin.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        
        $stmt->close();
        $conn->close();
    } else {
        echo "All fields are required";
    }
}


?>