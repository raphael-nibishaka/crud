<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'quality_test';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    exit('connection failed: ' . $conn->connect_error);
}

?>