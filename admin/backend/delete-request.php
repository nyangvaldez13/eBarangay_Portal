<?php 
include 'db.php';
?>

<?php
if ($dbConnect){
    $console_message = "Delete Request Connected!";
}

if(isset($_GET['table']) && isset($_GET['id'])){


    $table = $_GET['table'];
    $id = $_GET['id'];
    $sql = "DELETE FROM $table WHERE id = $id";
    $result = $conn->query($sql);
    $data = array("message" => "Successfully Deleted");
    header('Content-Type: application/json');
    echo json_encode($data);
}

?>