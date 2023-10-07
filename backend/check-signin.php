<?php

session_start();

// Check if the user is signed in
if (!isset($_SESSION['user_signed_in']) || $_SESSION['user_signed_in'] !== true) {

    echo 'not_signed_in';
} else {

    echo 'signed_in';
}
?>
