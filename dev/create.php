<?php
// Hanya proses jika method POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Koneksi ke database
    include 'config/conn_db.php';

    // Escape input untuk keamanan
    $prodName = $conn->real_escape_string($_POST['name']);
    $prodDesc = $conn->real_escape_string($_POST['description']);
    $prodPrice = (float) $_POST['price'];

    // Query insert
    $sql = "INSERT INTO products (name, description, price)
            VALUES ('$prodName', '$prodDesc', $prodPrice)";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman view
        header('Location: read_table_view.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
