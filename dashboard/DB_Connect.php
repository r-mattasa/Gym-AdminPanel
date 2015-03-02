<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback_gym";
//$connection = mysql_connect("localhost", "root", ""); // Establishing connection with server..
//$db = mysql_select_db("feedback_gym", $connection); // Selecting Database.

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 