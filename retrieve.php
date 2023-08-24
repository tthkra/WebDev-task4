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
} 


// query to retrive last stored data
$query = "SELECT * FROM sensor ORDER BY id DESC LIMIT 1";


// retrieve the data 
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    echo "temperature: " . $row["temp"];
    echo "humidity: " . $row["humidity"];
  
  } else {
    echo "No data found";
  }
  
  $conn->close();

?>