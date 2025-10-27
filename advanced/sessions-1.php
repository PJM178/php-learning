<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
  <style>
  </style>
</head>

<body style="background-color: black; color: plum; font-size: large">
  <?php
  // Sessions
  echo "Sessions, not to be confused with Session Storage in the browser, allows to store information in variables on the server to be used accross multiple pages." . "<br>";
  echo "Sesssion variables last until the user closes the browser." . "<br>";
  echo "Sessions are started with session_start() function." . "<br>";
  echo "Setting variables are done by using the superglobal \$_SESSION." . "<br>";
  $firstName = "John";
  $lastName = "PHP";
  echo "Setting variables $firstName and $lastName as global sessions variables." . "<br>";
  $_SESSION["first-name"] = $firstName;
  $_SESSION["last-name"] = $lastName;
  echo "Varibales set.";
  ?>
</body>

</html>