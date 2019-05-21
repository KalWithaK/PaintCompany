<?php
$host = "sql109.epizy.com";
$userName = "epiz_23934352";
$password = "FdMalYOG2ZGW0PZ";
$dbName = "epiz_23934352_contact_form_info";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>