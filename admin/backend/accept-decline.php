<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "Accept & Decline Table Connected!";
}

if(isset($_GET['table']) && isset($_GET['id']) && isset($_GET['type'])){
    $table = $_GET['table'];
    $id = $_GET['id'];
    $type = $_GET['type'];
    $sql = "UPDATE $table SET status = $type WHERE id = $id";
    $result = $conn->query($sql);
    $data = array("message" => "Successfully Updated");
    header('Content-Type: application/json');
    echo json_encode($data);
}

?>