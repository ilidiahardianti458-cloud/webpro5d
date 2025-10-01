<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'config/conn_db.php';

    // Ambil data dari form
    $id    = (int) $_POST['id']; // pastikan id angka
    $name  = $_POST['name'];
    $desc  = $_POST['description'];
    $price = (float) $_POST['price'];

    // Query update pakai prepared statement
    $sql = "UPDATE products 
            SET name = ?, description = ?, price = ? 
            WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $name, $desc, $price, $id);

    if ($stmt->execute()) {
        header('Location: read_table_view.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
