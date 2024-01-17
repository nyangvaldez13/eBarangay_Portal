<?php 
include 'db.php';
?>

<?php
if ($dbConnect){
    $console_message = "Delete Request Connected!";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $table = filter_input(INPUT_POST, 'table', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

    if($table !== null  && $id !== false && $id == null){
        $stmt = $conn->prepare("DELETE FROM $table WHERE id = ?");
        $stmt->bind_param('i', $id);
        
        if($stmt->execute()){
            echo json_encode(['success' => true, 'message' => 'Data deleted successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error deleting data']);
        }

        $stmt->close();
        $conn->close();

    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid or missing parameters']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

?>