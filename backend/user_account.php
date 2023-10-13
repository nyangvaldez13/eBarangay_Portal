<?php

$db = mysqli_connect("localhost", "root", "", "ebarangay_portal");

session_start();

//Login process
if(isset($_POST['login'])){
        
    $email  = $_POST['email'];  
    $pass   = $_POST['password'];  
  
    $email = stripcslashes($email);
    $pass = stripcslashes($pass);
    
    $email = mysqli_real_escape_string ($db, $email); 
    $pass = mysqli_real_escape_string ($db, $pass);
  
    $query  = " SELECT *
                FROM users 
                WHERE email = '$email' and user_password = '$pass'";
    $result = mysqli_query($db, $query);  

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);
    
    if($count == 1){  
        session_start();
        $_SESSION ['email']     = $email;
        $_SESSION ['id']   = $id;
        
        header("Location: ../user/_index.php");         
    }  else{  
        echo '<script>alert("Login failed.")</script>';  
        echo "<script>location.href='../login.php';</script>";
        exit();
    }
    /*if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];

        // Check if the entered password matches the stored hash
        if (password_verify($pass, $storedPassword)) {
            // Password is correct, set session and redirect
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $email;
            header("Location: index.php"); // Redirect to the dashboard or another page
            exit();
        } else {
            echo '<script>alert("Incorrect password.")</script>';  
        echo "<script>location.href='../login.php';</script>";
        }
    } else {
        echo '<script>alert("Email not found.")</script>';  
        echo "<script>location.href='../login.php';</script>";
    }    */
}

//Signup process
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

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

            $insertQuery = "INSERT INTO users (name, phone, email, user_password) VALUES ('$name', '$phone', '$email', '$password')";

            if (mysqli_query($db, $insertQuery)) {
                 echo "<script>alert('Registration successful.');</script>";
        echo "<script>location.href='../sign-up.php';</script>";
            } else {
                echo "Error: " . mysqli_error($db);
            }
        }
    }}

    //mysqli_close($conn);
}
?>
