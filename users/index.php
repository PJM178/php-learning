<!DOCTYPE html>
<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  require_once "../config/db.php";

  $query = "SELECT * FROM users";
  $result = $conn->query($query);

  if (!$result) {
    die("Query failed: " . $conn->error);
  }

  if ($result->num_rows > 0) {
    echo "<h2>User List</h2>";
    echo "<ul>";

    while ($row = $result->fetch_assoc()) {
      echo "<li>ID: " . $row["id"] . " - " . $row["username"] . " (" . $row["email"] . ")</li>";
    }
    
    echo "</ul>";
  } else {
    echo "No users found.";
  }
  ?>
</body>

</html>