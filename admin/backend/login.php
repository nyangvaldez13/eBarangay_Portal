<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND user_password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['access_level'] = $row['access_level'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];

        // Redirect based on access level = admin
        if ($row['access_level'] == 1) {
            header("Location: /admin/views/dashboard_admin");
            exit();
        } else {
            // Redirect based on access level = user
            session_destroy();
            header("Location: /admin");
            exit();
        }
    } else {
        // Invalid credentials
        echo '<script>alert("Invalid credentials");</script>';
        header("Location: /admin");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
