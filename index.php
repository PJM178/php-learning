<!DOCTYPE html>
<html>

<body>

  <h1>My first PHP page</h1>

  <?php
  echo "Hello World!<br>";
  ?>

  <?php
  $versionNumber = phpversion();
  echo "Hello from PHP in Docker!<br>";
  echo "<i>Hello from PHP in Docker - this is changed line!</i><br>";
  echo "PHP version: " . $versionNumber;
  echo "what" . $versionNumber;
  ?>

</body>

</html>