<!DOCTYPE html>
<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // Require and include
  echo "Difference between require and include is that, in the case of an error, require will produce a fatal error whereas include will only produce a warning, allowing for the script to continue" . "<br>";
  echo "Require should pretty much always be used instead of include since we want to be sure that whatever we want to include is always there" . "<br>";
  echo "As an example, footer of this page is required from ./templates/footer.php file using \"require\" keyword" . "<br>";
  echo "<br>";
  ?>
  <?php
  require "./templates/variables.php";
  echo "Variables printed here are from required file located at /templates/variables.php.";
  echo "<br>";
  echo $var1;
  echo "<br>";
  echo $var2;
  ?>
  <?php require "./templates/footer.php"; ?>
</body>

</html>