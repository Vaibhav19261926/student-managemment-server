<?php
$servername = "db";   // ❗ IMPORTANT (not localhost)
$username = "user";
$password = "password";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>