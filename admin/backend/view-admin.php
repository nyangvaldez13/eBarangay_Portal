<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "view-admin Table Connected!";
}


if(isset($_GET['id'])){
    $adminId = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $adminId";
    $personInfo = $conn->query($sql);

}

?>