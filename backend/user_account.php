<?php

include 'db.php';


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
        $_SESSION['email'] = $row['email'];
        $_SESSION['access_level'] = $row['access_level'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['id'] = $row['id'];

        // Redirect based on access level = admin
        if ($row['access_level'] == 1) {
            session_start();
            header("Location: ../admin/index.php");
            
            exit;
         // Redirect based on access level = user
        } else if ($row['access_level'] == 2) {
            session_start();
            header("Location: ../user/_index.php");
            exit;
        }
    } else {
        echo '<script>alert("Login failed.")</script>';
        echo "<script>location.href='../login.php';</script>";
        exit();
    }
}


//Signup process
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];
    $access_level = 2;

    if (
        strlen($password) < 8 ||                // Minimum length of 8 characters
        !preg_match('/\d/', $password) ||       // Contains at least one digit
        !preg_match('/[A-Z]/', $password)       // Contains at least one uppercase letter
    ) {
        echo "<script>alert('Password complexity requirements not met.');</script>";
            echo "<script>location.href='../sign-up.php';</script>";
    } else {

    if ($password !== $confirmPassword) {
        echo "<script>alert('Password and Confirm Password do not match.');</script>";
            echo "<script>location.href='../sign-up.php';</script>";
    } else {

        $checkQuery = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($db, $checkQuery);

        if (mysqli_num_rows($result) > 0) {

            echo "<script>alert('Email already registered.');</script>";
            echo "<script>location.href='../sign-up.php';</script>";
        } else {

            $insertQuery = "INSERT INTO users (name, phone, email, user_password, access_level) VALUES ('$name', '$phone', '$email', '$password', '$access_level')";

            if (mysqli_query($db, $insertQuery)) {
                 echo "<script>alert('Registration successful.');</script>";
        echo "<script>location.href='../sign-up.php';</script>";
            } else {
                echo "Error: " . mysqli_error($db);
            }
        }
    }}

    //mysqli_close($conn);
    $conn->close();
}
?>
