<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST['firstname']) &&
        isset($_POST['lastname']) &&
        isset($_POST['phone']) &&
        isset($_POST['email']) &&
        isset($_POST['user_password']) &&
        isset($_POST['address'])
    ) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $user_password = $_POST['user_password'];
        $address = $_POST['address'];
        $access_level = 1;
      
        $sql = "INSERT INTO users (firstname, lastname, phone, email, user_password, address, access_level)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

       
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $firstname, $lastname, $phone, $email, $user_password, $address, $access_level);

      
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