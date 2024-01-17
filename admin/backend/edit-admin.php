<?php 
include('db.php');
sleep(2);
if($_SERVER["REQUEST_METHOD"] === "POST"){
  
    if(isset($_POST['id'])){
        echo "test sad";
        $id = (int)$_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

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

            $sql = "UPDATE users SET firstname = ?, lastname = ?, address = ?, phone = ?, email = ?, photo = ? WHERE id = $id";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssss", $firstname, $lastname, $address, $phone, $email, $photoData);
            if ($stmt->execute()) {
                echo "Record updated successfully";
                header('location: ../views/edit-admin.php?id='. $id);
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $stmt->close();
        } else {
            
            $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', address = '$address', phone = '$phone', email = '$email' WHERE id = $id";
            if($conn->query($sql) === TRUE){
                echo "Record updated successfully";
                header('location: ../views/edit-admin.php?id='. $id);
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }

    // $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', address = '$address', phone = '$phone', email = '$email' WHERE id = $id";
 
    //     if($conn->query($sql) === TRUE){
    //         echo "Record Updated Successfully";
    //         header('location: ../views/edit-admin.php?id='. $id);
    //     } else {
    //         echo "Error updating record: " . $conn->error;
    //       }

    }
   

   
}

?>
