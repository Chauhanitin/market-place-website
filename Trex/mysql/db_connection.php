<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$database="trex";
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$database);
// Check connection
if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
// else {
//     echo "connected";
// }



// Make database named 'trex' in mysql and there make one table named 'user' with 3 columns 'Username , Email, Password'. 
?>