<?php
include 'config/conn_db.php';

// Ambil id dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // Query hapus data berdasarkan id
    $sql = "DELETE FROM products WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Setelah delete, balik ke halaman daftar
        header("Location: read_table_view.php");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid product ID";
}

$conn->close();
?>
