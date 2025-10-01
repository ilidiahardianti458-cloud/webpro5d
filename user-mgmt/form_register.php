<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add User</title>
</head>
<body>
  <h2>User Register</h2>
  <form action="insert_user.php" method="post">
    
    <label>Username (must be email):</label><br>
    <input type="email" name="username" required placeholder="example@mail.com"><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Full Name:</label><br>
    <input type="text" name="fullname" required><br><br>

    <label>Role:</label><br>
    <select name="role" required>
      <option value="">-- Select Role --</option>
      <option value="admin">Admin</option>
      <option value="operator">Operator</option>
      <option value="visitor">Visitor</option>
    </select><br><br>

    <label>Status:</label><br>
    <select name="status" required>
      <option value="">-- Select Status --</option>
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select><br><br>

    <input type="submit" value="Add User">
  </form>
</body>
</html>
