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
       

    $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', address = '$address', phone = '$phone', email = '$email' WHERE id = $id";
 
        if($conn->query($sql) === TRUE){
            echo "Record Updated Successfully";
            header('location: ../views/edit-admin.php?id='. $id);
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