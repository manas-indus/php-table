<?php
$servername = "localhost";
$username = "root";
$password = "Manas@12";
$dbname = "test_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
