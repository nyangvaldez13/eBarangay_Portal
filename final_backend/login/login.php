<?php 

include '../indexDB.php';

$message = "hello world";



if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND user_password = ?");
    $stmt->bind_param("ss", $email, $pass);
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
            header("Location: /admin/views/dashboard_admin.php");
            exit;
         // Redirect based on access level = user
        } else if ($row['access_level'] == 2) {
            header("Location: /final_views/main.php");
            exit();
        }
    } else {
        echo '<script>alert("Login failed.")</script>';
        echo "<script>location.href='/final_views/login.php';</script>";
        exit();
    }
}



?>

<script>
    const message = "<?= $message ?>";
    console.log(message);
</script>
