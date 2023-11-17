<!DOCTYPE html>
<html lang="en">

<?php 

$db = mysqli_connect("localhost", "root", "", "ebarangay_portal");
session_start();

if (isset($_POST['submit-button'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $purpose = $_POST['purpose'];

    // Validate the form data (check for empty required fields)
    if (empty($first_name) || empty($last_name) || empty($age) || empty($sex) || empty($phone_no) || empty($address) || empty($purpose)) {
        // Display an error message and handle the error as needed
        echo "Please fill in all required fields.";
    } else {
        
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        // Sanitize data and use prepared statements to prevent SQL injection
        $stmt = $db->prepare("INSERT INTO brgy_cert_submission (firstname, lastname, age, sex, phone_no, address, purpose) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissss", $first_name, $last_name, $age, $sex, $phone_no, $address, $purpose);

        if ($stmt->execute()) {
            // Insertion successful
            echo "Request submitted successfully!";
        } else {
            // Insertion failed
            echo "Request submission failed. Please try again.";
        }

        $stmt->close();
        $db->close();
    }
}
?>
<style>

/* Home */
.brgy-form {
    min-height: 100vh;
    background-color: #2D1674;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 1;
}

.brgy-form-background {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 70%;
    overflow: hidden;
}

.container-form{
    height: 88vh;
    width: 800px;
    display: flex;
    flex-direction: column;
    background-color: #fff;
    border-radius: 15px;
    margin-top: 100px;
    margin-bottom: 50px;
    z-index: 5;
    padding: 30px;
}

.container-form h1{
    text-align: center;
    color: #2D1674;
    margin-top: 20px;
    margin-bottom: 20px;
}

.back-button p{
    text-align: left;
    color: #2D1674;
    padding-left: 20px;
}

.container-column{
    display: flex;
    flex-direction: row;
    padding-left: 20px;
    margin-top: 16px;
}

.firstname{
    width: 70vh;
    margin-right: 20px;
}

.firstname p{
    text-align: left;
    color: #9B9988;
    padding-bottom: 5px;
}

.firstname input{
    height: 5vh;
}

.lastname{
    width: 70vh;
    margin-right: 20px;
}

.lastname p{
    text-align: left;
    color: #9B9988;
    padding-bottom: 5px;
}

.lastname input{
    height: 5vh;
}

.age{
    width: 10vh;
    margin-right: 40px;
}

.age p{
    text-align: left;
    color: #9B9988;
    padding-bottom: 5px;
}

.age input{
    height: 5vh;
}

.sex select {
    margin-top: 5px;
    margin-left: 20px;
    width: 100%;
    padding: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}



.phone_no{
    width: 88vh;
    margin-right: 10px;
    margin-left: 40px;
}

.phone_no p{
    text-align: left;
    color: #9B9988;
    padding-bottom: 5px;
}

.phone_no input{
    height: 5vh;
}

.email{
    width: 47.8vh;
    margin-right: 24px;
}

.email p{
    text-align: left;
    color: #9B9988;
    padding-bottom: 5px;
}

.email input{
    height: 5vh;
}

.name{
    width: 35vh;
    margin-right: 32px;
}

.name p{
    text-align: left;
    color: #9B9988;
    padding-bottom: 5px;
}

.name input{
    height: 5vh;
}

.address{
    width: 150vh;
    margin-right: -6px;
}

.address p{
    text-align: left;
    color: #9B9988;
    padding-bottom: 5px;
}

.purpose select {
    margin-top: 5px;
    margin-left: 10px;
    width: 100%;
    padding: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.address input{
    height: 5vh;
}

.submit-request {
    text-align: right;
    margin-top: 30px;
}
.submit-button {
    font-weight: 600;
    font-size: 14px;
    background-color: #2D1674;
    color: #f4f4f4;
    border: none;
    margin-left: 94.7vh;
    padding: 12px 20px;
    display: flex;
    border-radius: 8px;
    cursor: pointer;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Webpage Title -->
    <title>eBarangay Form Page</title>

    <!-- Branding -->
    <link rel="icon" href="../assets/branding/logo-lightmode.png">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css">
</head>
<body>
    <!-- Top navbar -->
    <?php
    require_once('../partials/user_topnav.html');
    ?>

    <!-- Home Section -->
    <section id="brgy-form" class="brgy-form">
            <div class="brgy-form-background">
                <img src="../assets/home/signup-bg.png" alt="">
            </div>
            <div class="container-form">
                <div class="back-button">
                    <a href="request_mainpage.php"><p>Back</p></a>
                </div>
                <h1>Senior Citizen Application Form</h1>
                <form method="POST">
                <div class="container-column">
                    <div class="firstname">
                        <p>First Name</p>
                        <input type="text" id="firstname" required name="first_name">
                    </div>
                    <div class="lastname">
                        <p>Last Name</p>
                        <input type="text" required name="last_name">
                    </div>
                </div>
                <div class="container-column">
                    <div class="age">
                        <p>Age</p>
                        <input type="text" id="age" required name="age">
                    </div>
                    <div class="email">
                        <p>Birthday</p>
                        <input type="text" id="email" required name="email" placeholder="Date">
                    </div>
                    <div class="email">
                        <p>Barangay Certificate</p>
                        <input type="text" id="email" required name="email" placeholder="Upload a file...">
                    </div>
                </div>
                <div class="container-column">
                    <div class="name">
                        <p>Last Name</p>
                        <input type="text" id="address" required name="address">
                    </div>
                    <div class="name">
                        <p>First Name</p>
                        <input type="text" id="address" required name="address">
                    </div>
                    <div class="name">
                        <p>Middle Name</p>
                        <input type="text" id="address" required name="address">
                    </div>
                </div>
                <div class="container-column">
                    <div class="address">
                        <p>Address</p>
                        <input type="text" id="address" required name="address">
                    </div>
                </div>
                <div class="submit-request">
                    <button class="submit-button" type="submit-button" name="submit-button">SUBMIT REQUEST</button>
                </div>
                </form>
            </div>
    </section>

    <!-- Footer -->
    <?php require_once('../partials/footer.html'); ?>
</body>

</html>