<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usernt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Increment the visitor count
$conn->query("UPDATE `visitors` SET `hits` = `hits` + 1 WHERE `id` = 1");

// Retrieve the visitor count
$result = $conn->query("SELECT `hits` FROM `visitors` WHERE `id` = 1");
$row = $result->fetch_assoc();
echo "Visitor count: " . $row['hits'];

$conn->close();
?>
