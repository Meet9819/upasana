<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "upasahgv_ngo";
$dbPassword = "loveyoudad9820102993";
$dbName     = "upasahgv_ngo";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>