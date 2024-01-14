<?php 
include('db.php');
sleep(2);
if($_SERVER["REQUEST_METHOD"] === "POST"){
  
    if(isset($_POST['id'])){
        echo "test sad";
        $id = (int)$_POST['id'];
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
       
    $sql = "UPDATE brgy_officials SET activity = '$type', title = '$title', date = '$date', time = '$time', place = '$location', 
            image = '$photoData', heading = '$description', description = '$desc' WHERE id = $id";
 
        if($conn->query($sql) === TRUE){
            echo "Record Updated Successfully";
            header('location: ../views/edit-news.php?id='. $id);
        } else {
            echo "Error updating record: " . $conn->error;
          }

    }
   

    // header('location: ../views/edit-admin.php?id='. $id);
}

// $id = (int)$_POST['id'];
// $firstname = $_POST['firstname'];
// $lastname = $_POST['lastname'];
// $address = $_POST['address'];
// $phone = $_POST['phone'];
// // validation here if may string
// $phone = preg_replace("/[^0-9]/", "", $phone);
// $email = $_POST['email'];

// // File handling
// $file_name = $_FILES['photo']['name'];
// $file_tmp = $_FILES['photo']['tmp_name'];
// $file_destination = "/files/upload_pictures/" . $file_name;



// if(move_uploaded_file($file_tmp, $file_destination)){
//     $stmt = $conn->prepare("UPDATE users SET firstname=?, lastname=?, address=?, phone=?, email=?, photo=? WHERE id=?");
//     $stmt->bind_param("sss", $firstname, $lastname, $address, $phone, $email, $file_destination, $id);

//     if($stmt->execute()){
       
//     } else {
//         echo "Error on Updating.";
//     }
// } else {
//     echo "Missing credentials field!";
// }


?>
