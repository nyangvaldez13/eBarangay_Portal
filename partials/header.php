<!DOCTYPE html>
<html lang="en">

<?php 

include '../backend/db.php';

// Fetch data from the 'activity' table
$sql = "SELECT * FROM activity WHERE activity IN ('event', 'announcement') ORDER BY date DESC";
$result = $conn->query($sql);

$displayedCount = 0;

?>

<style>

.user-dropdown-button {
    background-color: transparent;
    color: #000000;
    cursor: pointer;
    font-size: 15px;
    position: relative;
}

.user-profile{
    margin-top: 20px;
    margin-bottom: 30px;
    justify-content: center;
    align-items: center;
}

.dot {
  height: 78px;
  width: 78px;
  align-items: center;
  background-color: #bbb;
  border-radius: 50%;
  margin-left: 29%;
  margin-bottom: 3px;
  display: inline-block;
}

.user-profile p{
    color: #000000;
}

.user-dropdown-content {
    display: none;
    position: absolute;
    margin-top: 5px;
    margin-left: -125px;
    background-color: #f4f4f4;
    min-width: 195.5px;
    border-radius: 8px;
    border: 1px solid #9B9988;
    z-index: 10;
}

.user-dropdown-option {
    font-size: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px 16px;
    margin-bottom: 10px;
    cursor: pointer;
}

.user-dropdown-option a{
    text-decoration: none;
    color: #000000;
}

.user-notif-button {
    background-color: transparent;
    color: #000000;
    cursor: pointer;
    font-size: 15px;
    position: relative;
}

.user-notif{
    margin-top: 20px;
    margin-bottom: 30px;
    justify-content:center;
    align-items: center;
    
}

.user-notif p{
    padding-top: 50%;
    color: #000000;
}

.legal_doc-logo{
    width: 295px; 
    height: 60px;
    padding: 15px;
    margin: 15px;
    margin-top: 20px;
    background-color: #2D167417;
    box-sizing: border-box;
    border-radius: 10px;
    display: flex;
    flex-direction: row;
    display: none;
    overflow: hidden;
}

.doc-details{
    display: flex;
    flex-direction: column;
    padding-left: 10px;
}

.doc-details p{
    font-size: 14px;
    text-align: left;
    color: #262626E5;
}

.doc-status{
    display: flex;
    flex-direction: row;
    margin-bottom: 5px;
}

.doc-status .stat{
    padding-left: 7px;
    color: #FF0000;
}

.user-notif-content {
    display: none;
    position: absolute;
    margin-top: 5px;
    margin-left: -265px;
    background-color: #f4f4f4;
    min-width: 295.5px;
    min-height: 400px;
    border-radius: 8px;
    border: 1px solid #9B9988;
    z-index: 10;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Webpage Title -->
    <title>eBarangay User Page</title>

    <!-- Branding -->
    <link rel="icon" href="../assets/branding/logo-lightmode.png">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css">
</head>
<body>
    <!-- Top navbar -->
    <nav id="top-navbar" class="top-navbar">
        <div class="row">
            <div class="logo">
                <img src="../assets/branding/logo-darkmode.png" alt="">
            </div>
            <div class="links">
                <ul>
                &nbsp;
                    <li><a href="#home" id="home-link">Home</a></li>
                    <li><a href="#events" id="events-link">Events</a></li>
                    <li><a href="#request" id="request-link">Request</a></li>
                    <li><a href="#about" id="about-link">About</a></li>
                    <li><a href="#contact" id="contact-link">Contact</a></li>
                </ul>
            </div>
            <div class="user-buttons">
                <img class="user-notif-button" id="user-notif-btn" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABWElEQVR4nO2WvUpDMRSAr7/oUDv5Uytd1TqJk/gAYidRVPAN/NsEH0BcFUGwDioKXXwAHXVVXARfwcFZXFT85MAphDvUJOdSFPpB4CQ3J18SbkiSpMVfA8gDuQbfc9InS2EbsAGcAgWnvZCqDwNnwLrkWKVdwAkwn2pfAb6AT2A59W0BqEquRXwATDv1CnCnwjoS3wJzTr8ZYD9WWgE2nZVf8DvnQKfmbAGzMeIa0K7xEf4cak6HjBEqnQC2NS4D3wFi6TumuTvAeIhY/uJJjfcIZ1dzp4C1EPEq0KPxTYT4WnN7Zayg7XYm8RwhfoqSuQCvEeKXxALQnTqzvnzUj1WsuEw8oxbxkkG8aBHXDOLLWOkA8G4QvwH9odIh4AE798BgiPiK7Ljyleb1rs0KOY59PuIS8JhxKXlvd4OJjeirxC1F88Ceb7CqXn9SjpNmAhSbstIW/5YfKtTbo6Ea3+YAAAAASUVORK5CYII=">
                <div class="user-notif-content" id="user-notif-content">
                    <div class="user-notif">
                        <p> No notifications</p>
                    </div>
                    <div class="legal_doc-logo">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAl0lEQVR4nGNgGHZAR6TUS0es+LGuWMl/3Lj4na5YcSF5FhA0vOS/jmjxfTBbtLi
                        BZAsIGa4rVvJfS7JcTle05C6U30F1CxgYGBjItoRYC8i2hBQLQEBfvFwBHifERDypFqBYIlryloEaFuiSYPmoBf9Hg+j/aCoahhlNh4gKRxcXFi15RNgHIsWeIIXkGK4nWuJB0IIhBwBs8O2ovYosugAAAABJRU5ErkJggg==">
                        <div class="doc-details">
                            <div class="doc-status">
                                <p>Barangay Certificate     • </p>
                                <p class="stat">Declined</p></div>
                            <a href=""><p>See details</p></a>
                        </div>
                    </div>
                </div>
                &nbsp;
                <img class="user-dropdown-button" id="user-dropdown-btn" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAACXBIWXMAAAsTAAALEwEAmpwYAAACJElEQVR4nM2Wu0tdQRDGDdHORwofRC9poykt0mgE00UsfQSJFsYIGhME2xRaibYmvl+l2gvmplD8C6LRUrCJImrhI2IK/cngCMe9u3v2qoF8sHCYndnv7uw3Mzcj438EkAs0AJPAEvBLl3xPAPVAzkMQFQPjwDmwAQwAH4BaXfI9CGyqzyjw9K5kn4BTYB4oC/B/ASwAJ0BnOkRZeqsdoNLYywfeAl+AbqAaeGT4vNJYuW1WCKGQ/QRKDHsPcEYqFoGXhm9CzxgLSeNvC1kTflwA7yykctOPPoHIm1VY9kSRcTgAMo24Sn3TVCGpvOcs9hzgkjA8t8SLkEZtdSayLrUEFBGOcod6z2/VKdAIrDtSnZ3GDROOM6SG66MG6SD9Nmfd3w4gOzRLJBIvDWM8akgC7z11uR9AuO+qO6AN+G6qsMbhnEc48hxn1AiHmeM3npSuBpCteOKFcCNq+AG0egIKHV3mBn/ExxMvKU0Gi0Z9RjyEwzGxA6ZoGlxlYTQAaVUmduJmIddPVhc1PAH+2grfCFyzEK7FxJRp4efaUpbS2iL7BY7yEFu+J24B+GbbSKgwzBn4DOgF9jxvKHt94mvEVqmgil2/pkPfpESHa1JHTyguVPGv9YxdoN2XciGd1VFzXxwAM14yJXwcUwKhmDLnYxzxZ+D4DkRHQFcwkUEq7zCt/wTicKoNxC6QNIml6FuAr8AysKVLvoeAZpmb9yb6F7gC0wSa9m6alFAAAAAASUVORK5CYII=">
                <div class="user-dropdown-content" id="user-dropdown-content">
                    <div class="user-profile">
                    <span class="dot"></span>
                        <p>User Name</p>
                    </div>
                    <div class="user-dropdown-option" data-filter="all">
                        <a href="edit_profile.php"><span>Edit Profile</span></a>
                    </div>
                    <div class="user-dropdown-option" data-filter="events">
                        <a href="edit_password.php"><span>Settings</span></a>
                    </div>
                    <div class="user-dropdown-option" data-filter="announcements">
                        <a href="../backend/logout.php"><span>Sign out</span></a>
                    </div>
                </div>
           
            </div>
        </div>
    </nav>