  <?php
  $servername = "db";
  $username = "user";
  $password = "password";
  $dbname = "appdb";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  echo "Connected successfully to MySQL!";
  ?>