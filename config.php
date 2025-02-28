<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan user MySQL
$pass = "1345"; // Sesuaikan dengan password MySQL
$dbname = "course_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection Failed " . $conn->connect_error);
}
?>