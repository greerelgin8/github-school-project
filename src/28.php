<?php
// Initialize the session
session_start();

if (!isset($_SESSION['username'])) {
    // If there is no session variable 'username', redirect to login page
    header("Location: https://github.com/login");
    exit();
}

// Your code goes here...
?>
