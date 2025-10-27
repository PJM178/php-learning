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
  echo "Accessing session variables on this page - session_start() function is called at the start of the file." . "<br>";
  echo "User's first name is " . $_SESSION["first-name"] . " and last name " . $_SESSION["last-name"] . "." . "<br>";
  echo "Printing the \$_SESSION array:" . "<br>";
  print_r($_SESSION);
  echo "<br>";
  echo "To modify a session variable, just override the variabled with new information." . "<br>";
  echo "To destroy a session, use session_unset() to remove all the session variables and session_destrou() to end the session." . "<br>";
  session_unset();
  session_destroy();
  echo "Refreshing this page will have session variables be unset and the session ended." . "<br>";
  ?>
</body>

</html>