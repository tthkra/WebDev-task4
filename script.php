<?php

// set up connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful <br>";
}


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    $temp = $_GET['temperature'];
    $humidity = $_GET['humidity'];
            
        $query = "INSERT INTO sensor VALUES
         ('$temp', '$humidity')";
        if ($conn->query($query)) {
                echo "value inserted into database";
        } 
        else {
            echo "error: " . $conn->error;
        }
}

$conn->close();

?>