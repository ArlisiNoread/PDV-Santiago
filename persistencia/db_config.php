<?php
$servername = "arlisinoread.xyz:3306";
$username = "portal_admin";
$password = "Ygn$63s0";
$database = "portal_pdv";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>