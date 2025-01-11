<?php
$servername = "localhost";
$username = "root";
$password = "password"; // أ
$dbname = "dictionary";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
