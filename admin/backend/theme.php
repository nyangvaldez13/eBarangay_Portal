<?php 
include 'db.php';

if ($dbConnect){
    $console_message = "Theme Table Connected!";
}

$sql = "SELECT * FROM theme";
$themes = $conn->query($sql);

if($_SERVER['REQUEST_METHOD'] === "POST"){

    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        $themeId = $_POST['themeId']; // Assuming you are passing the theme ID from the frontend

        // Perform actions based on the requested action
        switch ($action) {
            case 'delete':
                deleteTheme($conn, $themeId);
                break;
            case 'apply':
                applyTheme($conn, $themeId);
                break;
            default:
                echo 'Invalid action';
                break;
        }
    } else {
        echo 'Action parameter not set';
    }

    $json_data = file_get_contents('php://input');
    if($json_data){
        $colors = json_decode($json_data, true);
    }

    if ($colors !== null) {
        $color1 = $colors['color1'];
        $color2 = $colors['color2'];
        $color3 = $colors['color3'];
        $color4 = $colors['color4'];

        $sql = "INSERT INTO theme (color1, color2, color3, color4) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bind_param("ssss", $color1, $color2, $color3, $color4);

        if ($stmt->execute()) {
            echo 'Data Successfully Inserted';
        } else {
            echo 'Error: ' . $stmt->error;
        }

        $stmt->close();
    } else {
        echo 'Error decoding JSON data';
    }

}



$conn->close();



// Function to delete theme
function deleteTheme($conn, $themeId) {
    // Implement deletion logic here, using $themeId
    // Example SQL: DELETE FROM theme WHERE id = ?
    // Make sure to use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM theme WHERE id = ?");
    $stmt->bind_param("i", $themeId);
    $stmt->execute();
    $stmt->close();
  
    echo 'Theme deleted successfully';
}

function applyTheme($conn, $themeId) {
    // Use prepared statement to prevent SQL injection
    $stmtSelect = $conn->prepare("SELECT * FROM theme WHERE id = ?");
    $stmtSelect->bind_param("i", $themeId);
    $stmtSelect->execute();

    // Get the result
    $result = $stmtSelect->get_result();

    // Fetch the data
    $themeData = $result->fetch_assoc();

    // Encode the data to JSON
    $jsonResult = json_encode($themeData);

    // Close the SELECT statement
    $stmtSelect->close();

    // Use the fetched data to update the settings table
    $stmtUpdate = $conn->prepare("UPDATE settings SET theme = ? WHERE id = 0");
    $stmtUpdate->bind_param("s", $jsonResult);

    // Execute the statement    
    if ($stmtUpdate->execute()) {
        echo 'Theme updated successfully';
    } else {
        echo 'Error: ' . $stmtUpdate->error;
    }

    // Close the UPDATE statement
    $stmtUpdate->close();
}


?>