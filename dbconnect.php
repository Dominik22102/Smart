<?php
$servername = "vweb18.nitrado.net";
$username = "ni138642_2sql2";
$password = "828dce7e";
$dbname = "ni138642_2sql2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>