<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'upasahgv_ngo';
$dbPassword = 'loveyoudad9820102993';
$dbName = 'upasahgv_ngo';


//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
} 
?>
