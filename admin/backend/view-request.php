<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "View-Request Table Connected!";
}


if(isset($_GET['table']) && isset($_GET['id'])){
    $table = $_GET['table'];
    $id = $_GET['id'];

    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        $resident = $result->fetch_assoc();
    }

    $data = array(
        "message" => "Successfully fetching the data.",
        "data" => $resident
    
    );
    header('Content-Type: application/json');
    echo json_encode($data);
    
}

?>