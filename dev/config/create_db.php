<?php
$servername = "127.0.0.1"; 
$username   = "root";
$password   = "";
$port       = 3307;

// Buat koneksi (pakai port!)
$conn = new mysqli($servername, $username, $password, "", $port);

// Cek koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Buat database
$sql = "CREATE DATABASE db_webprodb";
if ($conn->query($sql) === TRUE) {
  echo "Database db_webprodb created successfully<br>";
} else {
  echo "Error creating database db_webprodb: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
