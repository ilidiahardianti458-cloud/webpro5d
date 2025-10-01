<?php
include 'config/conn_db.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT id, name, description, price, created 
        FROM products 
        WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "0 results - Data not found";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product</title>
</head>
<body>
  <h2>Edit Product</h2>
  <form action="update.php" method="post">
    <!-- Hidden ID -->
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label>Product Name:</label><br>
    <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" required><?php echo htmlspecialchars($row['description']); ?></textarea><br><br>

    <label>Price:</label><br>
    <input type="number" name="price" step="0.01" value="<?php echo $row['price']; ?>" required><br><br>

    <input type="submit" value="Update Product">
  </form>
</body>
</html>
