<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["email"])) {
        $email = $_POST["email"];

        $stmt = $db->prepare("DELETE FROM users WHERE email = ?");
        $stmt->bind_param("i", $email);

        if ($stmt->execute()) {
            echo "Admin deleted successfully";
        } else {
            echo "Error deleting admin: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Invalid admin email";
    }
} else {
    echo "Invalid request method";
}
?>
