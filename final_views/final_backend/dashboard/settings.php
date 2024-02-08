<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ebarangay_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM settings WHERE id = 0";
$settings = $conn->query($sql);

foreach($settings as $setting){
    $title = $setting['title'];
    $title_sub = $setting['title_sub'];
    $description = $setting['description'];
    $logo = $setting['logo'];
    $informations[] = json_decode($setting['information'], true);
    $photos[] = json_decode($setting['photo'], true);
    $themes[] = json_decode($setting['theme'], true);
    $steps = json_decode($setting['step'], true);
    $cover_home = $setting['cover'];
}

$sql = "SELECT * FROM activity WHERE id = $cover_home";
$cover_info = $conn->query($sql);

foreach($cover_info as $cover){
    $cover_activity = $cover['activity'];
    $cover_title = $cover['title'];
    $cover_date = $cover['date'];
    $cover_place = $cover['place'];
    $cover_photo = $cover['photo'];
    $cover_description = $cover['description'];
}


foreach($informations as $information){
    $contact = $information['contact'];
    $email = $information['email'];
    $address = $information['address'];
}

foreach($photos as $photo){
    $login = $photo['login'];
}

foreach($themes as $theme){
    $color1 = $theme['color1'];
    $color2 = $theme['color2'];
    $color3 = $theme['color3'];
    $color4 = $theme['color4'];
}
$step1 = $steps[0];
$step2 = $steps[1];
$step3 = $steps[2];


$conn->close();
?>