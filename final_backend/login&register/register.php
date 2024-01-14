<?php 

include '../indexDB.php';

if (isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $photo = '';
    $access_level = 2;

    if (
        strlen($password) < 8 ||                // Minimum length of 8 characters
        !preg_match('/\d/', $password) ||       // Contains at least one digit
        !preg_match('/[A-Z]/', $password)       // Contains at least one uppercase letter
    ) {
        echo "<script>alert('Password complexity requirements not met.');</script>";
        
    } else {

    if ($password !== $confirmPassword) {
        echo "<script>alert('Password and Confirm Password do not match.');</script>";
            echo "<script>location.href='../sign-up.php';</script>";
    } else {

        $checkQuery = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($result) > 0) {

            echo "<script>alert('Email already registered.');</script>";
            echo "<script>location.href='../sign-up.php';</script>";
        } else {

            $insertQuery = "INSERT INTO users (firstname, lastname, phone, email, address, user_password, access_level, photo) VALUES ('$firstname', '$lastname', '$phone', '$email', '$address','$password', '$access_level', '$photo')";

            if (mysqli_query($conn, $insertQuery)) {
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