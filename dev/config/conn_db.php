<?php
$servername = "127.0.0.1";
$username   = "root";
$password   = "";
$database   = "db_webprodb"; // <-- pakai database yang sudah kamu buat
$port       = 3307;

// Koneksi langsung ke database
$conn = new mysqli($servername, $username, $password, $database, $port);

// Cek koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
?>
