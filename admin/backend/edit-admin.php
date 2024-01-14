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
   

   
}

?>
