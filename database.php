<?php
$servername = "localhost";
$username = "partelsandra";
$password = "Tuuletiib22";
$dbname = "partelsandra_AB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
