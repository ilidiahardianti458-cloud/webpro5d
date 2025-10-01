<?php
$servername = "127.0.0.1";
$username   = "root";
$password   = "";
$port       = 3307;
$dbname     = "db_webprodb";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE products(
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    price DOUBLE NOT NULL,
    created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id) 
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table products created successfully";
    } else {
      echo "Error creating table products: " . $conn->error;
    }
    
    $conn->close();
    ?>