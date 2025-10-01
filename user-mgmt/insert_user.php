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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']); // bisa tambahkan password_hash()
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $role     = $conn->real_escape_string($_POST['role']);
    $status   = $conn->real_escape_string($_POST['status']);

    $sql = "INSERT INTO users (username, password, fullname, role, status) 
            VALUES ('$username', '$password', '$fullname', '$role', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "New user added successfully. <a href='list_users.php'>Back to List</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
