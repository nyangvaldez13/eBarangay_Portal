 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ebarangay_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    $dbConnect = false;
    die("Connection failed: " . $conn->connect_error);
}
$dbConnect = true;
?>